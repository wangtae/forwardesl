# PostgreSQL 데이터베이스 설정 문서

## 개요

Forward ESL 프로젝트는 PostgreSQL 15 데이터베이스를 사용하며, Docker 컨테이너로 구성되어 있습니다. 이 문서는 데이터베이스 설정, 접근 정보, 및 테이블 구조에 대한 상세한 정보를 제공합니다.

## Docker 환경 설정

### 컨테이너 정보
- **이미지**: `postgres:15`
- **컨테이너 이름**: `forward-esl-postgres`
- **포트**: `5432` (호스트와 컨테이너 모두 동일)
- **네트워크**: `forward-esl-network`

### 환경 변수
```yaml
POSTGRES_DB: forward_esl
POSTGRES_USER: forward_user
POSTGRES_PASSWORD: forward_pass
```

## 데이터베이스 접근 정보

### 기본 접속 정보
- **호스트**: `localhost` (외부 접근시) 또는 `db` (컨테이너 내부)
- **포트**: `5432`
- **데이터베이스명**: `forward_esl`
- **사용자명**: `forward_user`
- **비밀번호**: `forward_pass`
- **관리자**: `postgres` (슈퍼유저)

### 연결 문자열
```
Host: localhost
Port: 5432
Database: forward_esl
Username: forward_user
Password: forward_pass
```

### psql 명령어로 접속
```bash
# Docker 컨테이너를 통한 접속
docker exec -it forward-esl-postgres psql -U forward_user -d forward_esl

# 호스트에서 직접 접속 (psql이 설치된 경우)
psql -h localhost -p 5432 -U forward_user -d forward_esl
```

## 데이터 볼륨

### 영구 저장소
- **볼륨명**: `postgres_data`
- **마운트 경로**: `/var/lib/postgresql/data`
- **용도**: PostgreSQL 데이터 파일의 영구 저장

### 백업 및 복구
```bash
# 데이터베이스 백업
docker exec -t forward-esl-postgres pg_dump -U forward_user forward_esl > backup.sql

# 데이터베이스 복구
docker exec -i forward-esl-postgres psql -U forward_user forward_esl < backup.sql
```

## 예상 테이블 구조

### 사용자 관리
```sql
-- 사용자 테이블
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    phone VARCHAR(20),
    country VARCHAR(2),
    english_level VARCHAR(20),
    status VARCHAR(20) DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 사용자 프로필
CREATE TABLE user_profiles (
    id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    avatar_url VARCHAR(255),
    timezone VARCHAR(50),
    language_preferences JSONB,
    learning_goals TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 강의 및 커리큘럼
```sql
-- 강의 과정
CREATE TABLE courses (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    level VARCHAR(20),
    course_type VARCHAR(50), -- 'adult', 'children', 'business'
    duration_weeks INTEGER,
    price_monthly DECIMAL(10,2),
    is_active BOOLEAN DEFAULT true,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 강의 레슨
CREATE TABLE lessons (
    id SERIAL PRIMARY KEY,
    course_id INTEGER REFERENCES courses(id) ON DELETE CASCADE,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    lesson_order INTEGER,
    duration_minutes INTEGER DEFAULT 30,
    materials_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 예약 및 스케줄
```sql
-- 클래스 스케줄
CREATE TABLE class_schedules (
    id SERIAL PRIMARY KEY,
    course_id INTEGER REFERENCES courses(id) ON DELETE CASCADE,
    teacher_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    scheduled_time TIMESTAMP NOT NULL,
    max_students INTEGER DEFAULT 4,
    current_students INTEGER DEFAULT 0,
    status VARCHAR(20) DEFAULT 'scheduled',
    meeting_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 학생 등록
CREATE TABLE enrollments (
    id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    course_id INTEGER REFERENCES courses(id) ON DELETE CASCADE,
    enrollment_date DATE DEFAULT CURRENT_DATE,
    status VARCHAR(20) DEFAULT 'active',
    completion_percentage DECIMAL(5,2) DEFAULT 0.00,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 클래스 참석
CREATE TABLE class_attendances (
    id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    schedule_id INTEGER REFERENCES class_schedules(id) ON DELETE CASCADE,
    attendance_status VARCHAR(20) DEFAULT 'registered',
    join_time TIMESTAMP,
    leave_time TIMESTAMP,
    participation_score DECIMAL(3,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 결제 및 구독
```sql
-- 구독 플랜
CREATE TABLE subscription_plans (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    classes_per_week INTEGER,
    duration_months INTEGER DEFAULT 1,
    is_active BOOLEAN DEFAULT true,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 사용자 구독
CREATE TABLE user_subscriptions (
    id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    plan_id INTEGER REFERENCES subscription_plans(id) ON DELETE CASCADE,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    status VARCHAR(20) DEFAULT 'active',
    payment_method VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 평가 및 진도
```sql
-- 레벨 테스트
CREATE TABLE level_tests (
    id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    test_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    listening_score INTEGER,
    speaking_score INTEGER,
    reading_score INTEGER,
    writing_score INTEGER,
    overall_level VARCHAR(20),
    recommendations TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 학습 진도
CREATE TABLE learning_progress (
    id SERIAL PRIMARY KEY,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    lesson_id INTEGER REFERENCES lessons(id) ON DELETE CASCADE,
    completion_status VARCHAR(20) DEFAULT 'not_started',
    completion_date TIMESTAMP,
    score DECIMAL(5,2),
    time_spent_minutes INTEGER,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 인덱스 및 제약조건

### 성능 최적화를 위한 인덱스
```sql
-- 자주 조회되는 컬럼에 인덱스 생성
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_enrollments_user_course ON enrollments(user_id, course_id);
CREATE INDEX idx_class_schedules_time ON class_schedules(scheduled_time);
CREATE INDEX idx_attendances_user_schedule ON class_attendances(user_id, schedule_id);
CREATE INDEX idx_subscriptions_user_status ON user_subscriptions(user_id, status);
```

### 제약조건
```sql
-- 이메일 유효성 검사
ALTER TABLE users ADD CONSTRAINT check_email_format 
CHECK (email ~* '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$');

-- 영어 레벨 제약
ALTER TABLE users ADD CONSTRAINT check_english_level 
CHECK (english_level IN ('beginner', 'intermediate', 'advanced', 'unknown'));

-- 가격 양수 제약
ALTER TABLE courses ADD CONSTRAINT check_price_positive 
CHECK (price_monthly >= 0);

-- 참석률 범위 제약
ALTER TABLE class_attendances ADD CONSTRAINT check_participation_score 
CHECK (participation_score >= 0 AND participation_score <= 1);
```

## 초기 데이터

### 기본 구독 플랜 데이터
```sql
INSERT INTO subscription_plans (name, description, price, classes_per_week) VALUES
('Foundations', '2 live group classes per week. Perfect for busy learners.', 97.00, 2),
('Momentum', '3 live group classes per week. Perfect for learners with specific goals.', 145.00, 3),
('Mastery', '5 live group classes per week. Best for rapid progress and serious learners.', 242.00, 5);
```

### 기본 코스 데이터
```sql
INSERT INTO courses (title, description, level, course_type, duration_weeks, price_monthly) VALUES
('General English - Beginner', 'Side by Side series for beginning English learners', 'beginner', 'adult', 12, 97.00),
('Business English Communication', 'Professional English for workplace communication', 'intermediate', 'adult', 16, 145.00),
('Children English Fun', 'Interactive English learning program for children', 'beginner', 'children', 12, 97.00);
```

## 보안 설정

### 사용자 권한
```sql
-- 애플리케이션 전용 사용자 권한 설정
GRANT CONNECT ON DATABASE forward_esl TO forward_user;
GRANT USAGE ON SCHEMA public TO forward_user;
GRANT CREATE ON SCHEMA public TO forward_user;
GRANT SELECT, INSERT, UPDATE, DELETE ON ALL TABLES IN SCHEMA public TO forward_user;
GRANT USAGE, SELECT ON ALL SEQUENCES IN SCHEMA public TO forward_user;
```

### 연결 보안
- 프로덕션 환경에서는 SSL 연결 필수
- 방화벽을 통한 포트 5432 접근 제한
- 정기적인 비밀번호 변경 권장

## 백업 전략

### 자동 백업 스크립트
```bash
#!/bin/bash
# daily_backup.sh

BACKUP_DIR="/backups/postgresql"
DATE=$(date +"%Y%m%d_%H%M%S")
BACKUP_FILE="forward_esl_backup_${DATE}.sql"

mkdir -p $BACKUP_DIR

docker exec forward-esl-postgres pg_dump -U forward_user forward_esl > "$BACKUP_DIR/$BACKUP_FILE"

# 7일 이상된 백업 파일 삭제
find $BACKUP_DIR -name "forward_esl_backup_*.sql" -mtime +7 -delete

echo "Backup completed: $BACKUP_FILE"
```

## 모니터링 및 유지보수

### 성능 모니터링 쿼리
```sql
-- 활성 연결 확인
SELECT count(*) FROM pg_stat_activity WHERE state = 'active';

-- 데이터베이스 크기 확인
SELECT pg_size_pretty(pg_database_size('forward_esl'));

-- 테이블별 크기 확인
SELECT schemaname, tablename, 
       pg_size_pretty(pg_total_relation_size(schemaname||'.'||tablename)) as size
FROM pg_tables 
WHERE schemaname = 'public' 
ORDER BY pg_total_relation_size(schemaname||'.'||tablename) DESC;
```

### 정기 유지보수
```sql
-- 통계 정보 업데이트
ANALYZE;

-- 테이블 최적화 (주의: 락이 발생할 수 있음)
VACUUM ANALYZE;
```

## 문제 해결

### 일반적인 문제
1. **연결 거부**: 포트 5432가 열려있는지 확인
2. **권한 오류**: 사용자 권한 설정 확인
3. **느린 쿼리**: 인덱스 및 쿼리 최적화 필요
4. **디스크 공간**: 로그 파일 및 오래된 백업 정리

### 로그 확인
```bash
# PostgreSQL 로그 확인
docker logs forward-esl-postgres

# 실시간 로그 모니터링
docker logs -f forward-esl-postgres
```

---

**최종 업데이트**: 2025-08-07  
**작성자**: Forward ESL Development Team  
**문서 버전**: 1.0