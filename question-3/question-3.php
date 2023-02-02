<?php




/**********************
- First problem noticed is using the name as primary key, it's possible can have the same name
- There is no id in any of the tables and the id should be the primary key
- The tables need to be separated a bit more, for example Subjects should have it's own table
***********************/


/**********************
** STUDENT TABLE ***
  - id | int (pk)
  - name | varchar
  - age | int
  - grade_id | int
  - teacher_id | int
***********************/


/**********************
** TEACHER TABLE ***
  - id | int (pk)
  - name | varchar
  - salary | float
***********************/


/**********************
** GRADES TABLE ***
  - id | int (pk)
  - grade_name | varchar
  - grade_val | int
  - head_of_grade_id | int
  - teacher_id | int
***********************/


/**********************
** SUBJECTS TABLE ***
  - id | int (pk)
  - subject_name | varchar
  - grade_id | varchar
  - teacher_id | int
***********************/


/**********************
** STUDENT SELECTED SUBJECTS TABLE ***
  - id | int (pk)
  - subject_id | varchar
  - student_id | int
  - status | varchar
  - started_on | varchar
  - completing_on | varchar
  - term_1_mark | varchar
  - term_2_mark | varchar
  - term_3_mark | varchar
  - term_4_mark | varchar
***********************/



/*--------------------------------------------------------
--
-- Table structure for table `grades`
--
*/
CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `grade_name` varchar(255) NOT NULL,
  `grade_val` int(11) NOT NULL,
  `head_of_grade_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*--------------------------------------------------------

--
-- Table structure for table `students`
--
*/
CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*--------------------------------------------------------

--
-- Table structure for table `student_subjects`
*/

CREATE TABLE `student_subjects` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `started_on` datetime NOT NULL,
  `completing_on` datetime NOT NULL,
  `term_1_mark` int(11) NOT NULL,
  `term_2_mark` int(11) NOT NULL,
  `term_3_mark` int(11) NOT NULL,
  `term_4_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*--------------------------------------------------------

--
-- Table structure for table `subjects`
--
*/

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*--------------------------------------------------------

--
-- Table structure for table `teachers`
--
*/
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*--
-- Indexes for table `grades`
--
*/
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_of_grade_id` (`head_of_grade_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `id` (`id`);

/*--
-- Indexes for table `students`
--
*/
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `id` (`id`);

/*--
-- Indexes for table `student_subjects`
--
*/
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `student_id` (`student_id`);

/*--
-- Indexes for table `subjects`
--
*/
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_code` (`subject_code`),
  ADD KEY `id` (`id`),
  ADD KEY `subject_name` (`subject_name`),
  ADD KEY `subject_code_2` (`subject_code`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `grade_id` (`grade_id`);

/*--
-- Indexes for table `teachers`
--
*/
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

/*--
-- AUTO_INCREMENT for dumped tables
--
*/

/*--
-- AUTO_INCREMENT for table `grades`
--
*/
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*--
-- AUTO_INCREMENT for table `students`
--
*/
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*--
-- AUTO_INCREMENT for table `student_subjects`
--
*/
ALTER TABLE `student_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*--
-- AUTO_INCREMENT for table `subjects`
--
*/
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*--
-- AUTO_INCREMENT for table `teachers`
--
*/
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;



 ?>
