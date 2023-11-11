# Edugo

# Description 

Edugo is a comprehensive educational website dedicated to providing in-depth information about various competitive exams, including but not limited to Eamcet, NEET, Banking Exams, JEE Advanced, JEE Mains, CAT, GRE, GATE, IELTS, and TOEFL. Edugo serves as a one-stop solution for students, offering detailed insights into each exam, ensuring that users are well-equipped with all the necessary information to excel in their chosen fields.

# Key Features

## 1.Exam Information Hub 
- **Eligibility Criteria:** Clear and concise details about the eligibility requirements for each exam.
- **Syllabus:** Comprehensive breakdowns of the syllabus for thorough exam preparation.

- **Cutoff Marks:** Previous year cutoff marks to provide a benchmark for aspiring candidates.

- **Exam Dates:** Up-to-date information on exam schedules to help users plan effectively.

- **Exam Pattern:** Detailed descriptions of the exam formats for better understanding.

- **Previous Year Papers:** Access to past papers for practice and familiarity with the exam pattern.

- **Study Materials:** Curated study materials to aid in exam preparation.

- **Registration Fees:** Information on the registration fees for each exam.

## 2. User Personalisation 
- **User Accounts:** Users can create accounts and log in to customize their Edugo experience.
- **Exam Selection:** Users can choose their exams of interest, tailoring the content to their needs.
- **Email Notifications:** Subscribers receive timely notifications from the admin about updates related to their chosen exams.

## 3. Admin Dashboard
- **User Management:** Admin can view and manage users registered for various exams.
- **Content Updates:** Admin can add new information, and users interested in specific exams receive automatic notifications.

# Technologies Used

Edugo is built using a combination of web technologies to provide a dynamic and interactive educational experience. The front-end of the website is crafted using HTML for structuring content, CSS for styling and formatting, and JavaScript for adding dynamic and interactive features to web pages. On the server-side, PHP, a server-side scripting language, is employed for tasks such as interacting with databases and performing server-side processing. This technology stack forms the foundation of Edugo, ensuring a seamless and responsive user experience.

# Database Used
edugodb

# Tables

## add_files
| ID | DATATYPE | INDEX |
| --- | --- | --- |
| id | varchar(256) | primary key |
| exam | varchar(256) | not null  |
| url | varchar(256) | not null |
| title | varchar(256) | not null |

## queries
| ID | DATATYPE | INDEX |
| --- | --- | --- |
| id | varchar(256) | primary key |
| username | varchar(256) | not null  |
| email | varchar(256) | not null |
| msg | varchar(256) | not null |

## users 
| ID | DATATYPE | INDEX |
| --- | --- | --- |
| id | varchar(256) | primary key |
| username | varchar(256) | not null  |
| email | varchar(256) | not null |
| pswd | varchar(256) | not null |
| FOI | varchar(256) | not null |




