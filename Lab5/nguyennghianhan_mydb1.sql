CREATE DATABASE IF NOT EXISTS nguyennghianhan_mydb1 COLLATE utf8mb4_unicode_ci;
USE nguyennghianhan_mydb1;

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentcode` varchar(20) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `studentcode` (`studentcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `students` (`studentcode`, `fullname`, `phone`, `gender`) VALUES
('SV001', 'Trần Văn A', '0901234567', 'Nam'),
('SV002', 'Trần Thị B', '0901234568', 'Nữ'),
('SV003', 'Nguyễn Văn C', '0901234569', 'Nam'),
('SV004', 'Lê Thị D', '0901234570', 'Nữ'),
('SV005', 'Phạm Văn E', '0901234571', 'Nam');

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(20) DEFAULT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `credits` int(11) DEFAULT NULL,
  `tuition_fee` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `courses` (`course_code`, `course_name`, `credits`, `tuition_fee`) VALUES
('PHP101', 'PHP MySQL', 3, 2500000),
('WEB201', 'Thiết kế Web', 2, 1800000),
('DB301', 'Cơ sở dữ liệu', 3, 2200000),
('JAVA101', 'Lập trình Java', 4, 3000000),
('NET201', '.NET C#', 3, 2800000);

UPDATE courses SET tuition_fee = 1000000 WHERE course_code = 'PHP101';
DELETE FROM courses WHERE course_code = 'WEB201';
