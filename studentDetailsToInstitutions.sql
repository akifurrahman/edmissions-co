-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2024 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentDetailsToInstitutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies_institutions`
--

CREATE TABLE `companies_institutions` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `placement_head_name` varchar(255) DEFAULT NULL,
  `placement_head_contact` varchar(15) DEFAULT NULL,
  `institute_type` varchar(50) DEFAULT NULL,
  `number_of_students` int(11) DEFAULT NULL,
  `accreditation` varchar(100) DEFAULT NULL,
  `entrepreneurial_support` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies_institutions`
--

INSERT INTO `companies_institutions` (`ID`, `name`, `email`, `address`, `placement_head_name`, `placement_head_contact`, `institute_type`, `number_of_students`, `accreditation`, `entrepreneurial_support`) VALUES
(2, 'ABC College', 'info@abccollege.edu', '456 Oak Ave, Townsville, State, Country', 'Jane Smith', '555-5678', 'College', 5000, 'National Accreditation Commission', 'Startup Mentorship Program, Innovation Hub'),
(3, 'Tech Institute', 'info@techinstitute.org', '789 Pine Rd, Tech City, State, Country', 'Robert Johnson', '555-9876', 'Technical Institute', 8000, 'Technical Education Authority', 'Tech Startup Accelerator, Coding Bootcamps'),
(4, 'Arts Academy', 'info@artsacademy.edu', '101 Maple Blvd, Artstown, State, Country', 'Emily White', '555-4321', 'Art Academy', 3000, 'National Art Accreditation Council', 'Creative Entrepreneurship Workshops, Art Gallery Incubator'),
(5, 'Business School', 'info@businessschool.com', '202 Cedar Lane, Commerce City, State, Country', 'Michael Brown', '555-8765', 'Business School', 7000, 'International Business Accreditation Board', 'Entrepreneurial Leadership Program, Business Incubator'),
(6, 'Sci-Tech University', 'info@scitechuniversity.edu', '303 Pineapple St, Innovatown, State, Country', 'Sarah Miller', '555-2345', 'University', 12000, 'Science and Technology Accreditation Council', 'Science Park, Tech Innovation Labs'),
(7, 'Health Institute', 'info@healthinstitute.org', '404 Peach Lane, Medville, State, Country', 'David Taylor', '555-6543', 'Medical Institute', 6000, 'Health Education Accreditation Authority', 'Medical Innovation Center, Healthcare Entrepreneurship Program'),
(8, 'Liberal Arts College', 'info@liberalartscollege.com', '505 Elm Street, Humanitiesville, State, Country', 'Laura Davis', '555-7890', 'Liberal Arts College', 4500, 'National Liberal Arts Accreditation Board', 'Humanities Incubator, Arts and Culture Initiatives'),
(9, 'Engineering School', 'info@engineeringschool.edu', '606 Oakwood Ave, Engineertown, State, Country', 'Chris Wilson', '555-7654', 'Engineering School', 8500, 'Engineering Accreditation Commission', 'Engineering Innovation Hub, Robotics Lab'),
(10, 'Design Academy', 'info@designacademy.org', '707 Maple Blvd, Design City, State, Country', 'Alexandra Turner', '555-8901', 'Design Academy', 2500, 'National Design Accreditation Council', 'Design Thinking Workshops, Creative Studio Incubator'),
(11, 'Environmental Institute', 'info@envinstitute.com', '808 Cedar Lane, Ecoville, State, Country', 'Daniel Green', '555-4321', 'Environmental Institute', 4000, 'Environmental Education Accreditation Board', 'Green Innovation Center, Sustainable Business Program'),
(12, 'Music Conservatory', 'info@musicconservatory.edu', '909 Pine Rd, Harmonytown, State, Country', 'Melissa Adams', '555-6789', 'Music Conservatory', 3200, 'National Music Accreditation Council', 'Music Entrepreneurship Program, Recording Studio Incubator'),
(13, 'Law School', 'info@lawschool.com', '1010 Maple Ave, Legalville, State, Country', 'Christopher Lee', '555-8765', 'Law School', 5500, 'Legal Education Accreditation Board', 'Legal Innovation Center, Moot Court Incubator'),
(15, 'Agricultural College', 'info@agricollege.edu', '121 Elm Street, Farmtown, State, Country', 'Matthew Carter', '555-5678', 'Agricultural College', 6000, 'Agricultural Education Accreditation Board', 'Agribusiness Incubator, Sustainable Farming Program'),
(16, 'Social Sciences School', 'info@socialschool.com', '131 Oak Ave, Societystown, State, Country', 'Eleanor Johnson', '555-9876', 'Social Sciences School', 4800, 'National Social Sciences Accreditation Council', 'Social Innovation Hub, Community Development Program'),
(17, 'Dental Institute', 'info@dentalinstitute.org', '141 Maple Blvd, Dentaltown, State, Country', 'Andrew White', '555-6543', 'Dental Institute', 3200, 'Dental Education Accreditation Board', 'Dental Innovation Center, Oral Health Entrepreneurship Program'),
(18, 'Tourism College', 'info@tourismcollege.com', '151 Cedar Lane, Touristville, State, Country', 'Olivia Martin', '555-8901', 'Tourism College', 4000, 'National Tourism Education Accreditation Council', 'Tourism Entrepreneurship Program, Travel Innovation Center'),
(19, 'Mathematics Institute', 'info@mathinstitute.edu', '161 Oakwood Ave, Mathburg, State, Country', 'Ryan Anderson', '555-7654', 'Mathematics Institute', 3000, 'Mathematics Education Accreditation Board', 'Mathematics Innovation Lab, Math Entrepreneurship Program'),
(20, 'Film School', 'info@filmschool.org', '171 Pine Rd, Cinematown, State, Country', 'Hannah Roberts', '555-2345', 'Film School', 4200, 'National Film Education Accreditation Council', 'Film Production Incubator, Cinematic Arts Program');

-- --------------------------------------------------------

--
-- Table structure for table `companies_students`
--

CREATE TABLE `companies_students` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `current_course` varchar(50) DEFAULT NULL,
  `communication_languages` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `academic_performance` varchar(100) DEFAULT NULL,
  `extracurricular_activities` text DEFAULT NULL,
  `work_experience` text DEFAULT NULL,
  `projects` text DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `goals` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies_students`
--

INSERT INTO `companies_students` (`ID`, `name`, `contact_number`, `current_course`, `communication_languages`, `address`, `academic_performance`, `extracurricular_activities`, `work_experience`, `projects`, `skills`, `goals`) VALUES
(2, 'Jane Smith', '555-123-4567', 'Electrical Engineering', 'English, Mandarin', '456 Tech Blvd, Tech City', 'GPA: 3.5', 'Member of Robotics Club, Volunteer at Community Center', 'Electrical Engineer Intern at PowerTech', 'Smart Grid Project, Circuit Design Project', 'C++, MATLAB, AutoCAD', 'To innovate in sustainable energy solutions.'),
(3, 'Amanda Johnson', '789-456-1230', 'Business Administration', 'English, Spanish', '789 Business Pkwy, Businesstown', 'GPA: 3.9', 'Captain of Soccer Team, Treasurer of Finance Club', 'Marketing Intern at MarketPro', 'Market Research Project, Social Media Campaign', 'Marketing, Spanish, Data Analysis', 'To lead a successful marketing team in a multinational corporation.'),
(4, 'Michael Turner', '111-222-3333', 'Computer Engineering', 'English, French', '321 Tech Lane, Techland', 'GPA: 3.7', 'Member of AI Club, Hackathon Participant', 'Hardware Engineer Intern at TechGenius', 'Embedded Systems Project, Robotics Project', 'C, Python, Verilog', 'To contribute to the advancement of artificial intelligence and robotics.'),
(5, 'Sophie Roberts', '444-555-6666', 'Graphic Design', 'English, German', '555 Creativity St, Creativetown', 'GPA: 3.6', 'Graphic Design Lead in Design Club', 'Graphic Designer at Creative Minds Agency', 'Brand Identity Project, Advertisement Design', 'Adobe Creative Suite, Sketch, Illustration', 'To create visually compelling designs and make a positive impact in the creative industry.'),
(6, 'Daniel Brown', '666-777-8888', 'Finance', 'English, Chinese', '123 Finance Pkwy, Financetown', 'GPA: 3.9', 'President of Finance Club, Investment Analyst', 'Financial Analyst at Capital Investments', 'Market Analysis Project, Investment Portfolio Management', 'Financial Modeling, Data Analysis', 'To excel in financial analysis and contribute to strategic investment decisions.'),
(7, 'Olivia Turner', '222-333-4444', 'Biomedical Engineering', 'English, Spanish', '789 Med Lane, Medtown', 'GPA: 3.8', 'Research Assistant in Biomedical Lab', 'Biomedical Engineer Intern at BioTech Solutions', 'Biomedical Research Project, Medical Device Design', 'MATLAB, LabVIEW, Biomedical Signal Processing', 'To innovate in medical technology and improve healthcare outcomes.'),
(8, 'David Mitchell', '777-888-9999', 'Human Resources', 'English, French', '987 HR Blvd, HRville', 'GPA: 3.7', 'HR Intern at TalentForge', 'Recruitment Drive Organizer, Employee Relations', 'HR Management Project, Employee Engagement Program', 'Recruitment, Employee Relations, HR Analytics', 'To contribute to the development of effective human resource strategies.'),
(9, 'Emma Carter', '444-666-8888', 'Environmental Science', 'English, Spanish', '456 Eco Lane, Ecotown', 'GPA: 3.5', 'Environmental Club President, Sustainability Advocate', 'Environmental Research Intern at EcoSolutions', 'Sustainable Practices Project, Environmental Impact Assessment', 'Environmental Science, Data Analysis', 'To contribute to environmental conservation and promote sustainable practices.'),
(10, 'Daniel Taylor', '333-444-5555', 'Mechanical Engineering', 'English, German', '555 Mech Blvd, Mechland', 'GPA: 3.6', 'Member of Formula SAE Team, Robotics Enthusiast', 'Mechanical Engineering Intern at MechTech Innovations', 'Robotics Project, Mechanical Design Project', 'AutoCAD, SolidWorks, Robotics', 'To contribute to the field of mechanical engineering and robotics.'),
(11, 'Lily Anderson', '111-888-4444', 'Marketing', 'English, Spanish', '321 Market Street, Marketland', 'GPA: 3.8', 'Marketing Coordinator in Marketing Club', 'Marketing Intern at Innovate Marketing Solutions', 'Content Marketing Project, Social Media Campaign', 'Marketing Strategy, Content Creation', 'To excel in strategic marketing and contribute to brand success.'),
(12, 'Matthew Turner', '333-111-4444', 'Physics', 'English, French', '555 Physics Lane, Physicstown', 'GPA: 3.9', 'Physics Research Assistant, Science Enthusiast', 'Physics Research Intern at Quantum Innovations', 'Quantum Physics Project, Particle Physics Experiment', 'MATLAB, Python, Quantum Physics', 'To contribute to advancements in theoretical physics and quantum mechanics.'),
(13, 'Emily White', '777-888-9999', 'Data Science', 'English, Spanish', '123 Data Blvd, Datatown', 'GPA: 3.7', 'Member of Data Science Club, Kaggle Competitor', 'Data Science Intern at DataInnovators', 'Predictive Analytics Project, Machine Learning Model', 'Python, R, Machine Learning', 'To leverage data science techniques for meaningful insights and decision-making.'),
(14, 'Noah Turner', '333-666-1111', 'Finance', 'English, Chinese', '789 Finance Lane, Financetown', 'GPA: 3.8', 'Investment Analyst in Finance Club', 'Financial Analyst at Investment Solutions', 'Investment Portfolio Management, Risk Analysis', 'Financial Modeling, Investment Analysis', 'To excel in financial analysis and contribute to sound investment strategies.'),
(15, 'Ella Johnson', '555-111-3333', 'Graphic Design', 'English, French', '456 Design Street, Designtown', 'GPA: 3.6', 'Graphic Design Lead in Creative Club', 'Graphic Designer at DesignPro Studios', 'Visual Branding Project, Print Design', 'Adobe Creative Suite, Typography, Illustration', 'To create visually appealing designs and make a mark in the design industry.'),
(16, 'James Turner', '666-222-4444', 'Computer Science', 'English, Spanish', '987 Tech Lane, Techland', 'GPA: 3.9', 'President of AI Club, Machine Learning Enthusiast', 'Software Developer Intern at TechInnovate', 'Machine Learning Project, Natural Language Processing', 'Java, Python, Machine Learning', 'To contribute to advancements in artificial intelligence and machine learning.'),
(17, 'Sophia Lee', '555-222-9999', 'Marketing', 'English, Mandarin', '789 Marketing Blvd, Marketingtown', 'GPA: 3.7', 'Marketing Coordinator in Marketing Society', 'Marketing Intern at BrandGenius', 'Brand Strategy Project, Social Media Campaign', 'Marketing Strategy, Content Creation', 'To excel in strategic marketing and contribute to brand development.'),
(18, 'Joshua Parker', '666-222-4444', 'Human Resources', 'English, Spanish', '321 HR Street, HRtown', 'GPA: 3.8', 'HR Intern at TalentForge', 'Employee Relations, Recruitment Drive Organizer', 'HR Management Project, Employee Engagement Program', 'Recruitment, Employee Relations, HR Analytics', 'To contribute to effective human resource management and organizational development.'),
(19, 'Emma Davis', '111-333-5555', 'Environmental Science', 'English, French', '555 Eco Lane, Ecoville', 'GPA: 3.6', 'Environmental Club Member, Sustainability Advocate', 'Environmental Research Intern at EcoSolutions', 'Sustainable Practices Project, Environmental Impact Assessment', 'Environmental Science, Data Analysis', 'To contribute to environmental conservation and promote sustainable practices.'),
(20, 'Charlie Davis', '444-333-5555', 'Data Science', 'English, Spanish', '987 Data Blvd, Datatown', 'GPA: 3.9', 'Data Science Club President, Kaggle Competitor', 'Data Scientist at InnovateData', 'Predictive Analytics Project, Data Visualization', 'Python, R, Data Analysis', 'To leverage data science for innovative solutions and decision-making.');

-- --------------------------------------------------------

--
-- Table structure for table `institution_companies`
--

CREATE TABLE `institution_companies` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `company_description` text DEFAULT NULL,
  `hr_rm_name` varchar(100) DEFAULT NULL,
  `hr_rm_contact_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `previous_collaboration` text DEFAULT NULL,
  `testimonials` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institution_companies`
--

INSERT INTO `institution_companies` (`ID`, `name`, `email`, `contact_number`, `company_description`, `hr_rm_name`, `hr_rm_contact_number`, `address`, `previous_collaboration`, `testimonials`) VALUES
(2, 'Innovative Solutions Inc.', 'hr@examplecompany.com', '555-123-4567', 'Innovative Solutions specializes in software development.', 'Jane Smith', '789-456-1230', '456 Tech Blvd, Tech City', 'No previous collaboration.', 'Highly recommended for internships.'),
(3, 'XYZ Corporation', 'recruitment@xyzcorp.com', '111-222-3333', 'XYZ Corporation is a global leader in manufacturing.', 'Mike Johnson', '333-444-5555', '789 Industrial Pkwy, Industrytown', 'We worked together on a recruitment drive.', 'Satisfied with their recruitment services.'),
(4, 'ABC Inc.', 'contact@abcinc.com', '777-888-9999', 'ABC Inc. is a marketing and advertising agency.', 'Emily Davis', '111-999-8888', '321 Ad Ave, Advertsville', 'Explored collaboration on a marketing campaign.', 'Satisfied with their creativity and ideas.'),
(5, 'TechWorld Solutions', 'hiring@techworld.com', '444-555-6666', 'TechWorld Solutions provides IT consulting services.', 'Robert Turner', '222-666-5555', '555 Tech Lane, IT City', 'Jointly worked on a software development project.', 'Their team is highly skilled and professional.'),
(6, 'Innovation Corporation', 'jobs@innovationcorp.org', '999-111-2222', 'Innovation Corporation focuses on cutting-edge research.', 'Samantha Green', '444-777-8888', '987 Research Rd, Innovativetown', 'Explored internship opportunities for research projects.', 'Positive experience with their research intern.'),
(7, 'Global Tech Solutions', 'hr@globaltechsolutions.com', '666-777-8888', 'Global Tech Solutions is a leading provider of IT solutions.', 'Daniel Brown', '555-888-9999', '123 Tech Square, Techland', 'Collaborated on multiple IT projects in the past.', 'Their team consistently delivers high-quality results.'),
(8, 'Startup Talents', 'recruitment@startuptalents.com', '333-222-1111', 'Startup Talents focuses on talent acquisition for startups.', 'Jessica Miller', '666-111-2222', '789 Startup Blvd, Startup City', 'No previous collaboration.', 'Efficient in recruiting candidates for startup roles.'),
(9, 'Innovate Co.', 'info@innovateco.com', '555-111-7777', 'Innovate Co. specializes in product design and innovation.', 'Michael Chang', '777-333-5555', '456 Innovation Blvd, Innovateville', 'Collaborated on product design and innovation projects.', 'Impressed with their innovative solutions.'),
(10, 'Health Tech Solutions', 'recruit@healthtechsolutions.org', '888-555-2222', 'Health Tech Solutions focuses on healthcare IT solutions.', 'Amanda White', '333-666-8888', '789 Health Pkwy, Healthtown', 'Assisted in a recruitment drive for healthcare IT professionals.', 'Positive feedback from recruited professionals.'),
(11, 'EnergyLink Inc.', 'hr@energylinkinc.com', '111-888-4444', 'EnergyLink Inc. is a renewable energy solutions provider.', 'Alex Thompson', '222-444-6666', '321 Renewable Rd, Energy City', 'Explored job placement opportunities in the renewable energy sector.', 'Satisfied with their recruitment process.'),
(12, 'Innovative Startups', 'intern@innovativestartups.com', '777-666-5555', 'Innovative Startups fosters innovation in startup environments.', 'Olivia Lewis', '555-888-9999', '123 Startup Street, Startupville', 'Collaborated on startup innovation programs.', 'Positive testimonials from startup participants.'),
(13, 'Tech Solutions Group', 'collaborate@techsolutionsgroup.com', '222-999-1111', 'Tech Solutions Group provides comprehensive IT services.', 'Charlie Davis', '444-333-5555', '789 Tech Plaza, Techville', 'Ongoing collaboration on various IT projects.', 'Consistently delivers quality and on-time solutions.'),
(14, 'Consulting Pros', 'recruitment@consultingpros.com', '999-555-3333', 'Consulting Pros offers management consulting services.', 'Sophie Roberts', '888-333-7777', '456 Consulting Lane, Consultancy City', 'Assisted in recruiting management consultants for a project.', 'Positive feedback from client regarding consultants.'),
(15, 'Innovation Labs', 'jobs@innovationlabs.org', '666-888-1111', 'Innovation Labs focuses on research and development.', 'Matthew Turner', '333-111-4444', '555 Research Street, Labtown', 'Providing internships for research and development projects.', 'Interns have contributed positively to our projects.'),
(16, 'Logistics Pro', 'contact@logisticspro.com', '777-555-4444', 'Logistics Pro specializes in supply chain and logistics solutions.', 'Emma Carter', '444-666-8888', '987 Logistics Blvd, Logisticstown', 'Collaborated on optimizing supply chain processes.', 'Their solutions have significantly improved our logistics.'),
(17, 'Talent Forge', 'recruitment@talentforge.com', '111-333-5555', 'Talent Forge is a talent acquisition platform.', 'Joshua Parker', '666-222-4444', '321 Talent Street, Talentville', 'Utilized their platform for recruitment purposes.', 'Efficient platform with a wide pool of talented candidates.'),
(18, 'Innovative Edu', 'partnerships@innovativeedu.org', '555-999-2222', 'Innovative Edu focuses on educational innovation and partnerships.', 'Lily Anderson', '777-111-3333', '123 Edu Lane, Eduville', 'Explored collaboration on educational innovation projects.', 'Positive feedback from students on collaborative projects.'),
(19, 'Tech Starters', 'jobplacement@techstarters.com', '888-222-4444', 'Tech Starters assists startups in talent acquisition and job placement.', 'David Mitchell', '333-666-9999', '456 Tech Street, Techland', 'Facilitated job placements for startup roles.', 'Startups have expressed satisfaction with the placed candidates.'),
(20, 'Creative Solutions Co.', 'opportunities@creativesolutions.co', '111-777-4444', 'Creative Solutions Co. offers creative services and solutions.', 'Sophia Lee', '555-222-9999', '789 Creative Blvd, Creativetown', 'Collaborated on creative projects and services.', 'Positive feedback on the creativity and innovation of their team.'),
(21, 'Data Innovators Ltd.', 'info@datainnovators.com', '999-111-2222', 'Data Innovators Ltd. specializes in data analytics solutions.', 'Sarah Johnson', '555-666-7777', '123 Data Street, Datatown', 'Collaborated on data analytics projects.', 'Impressed with their analytical capabilities.'),
(22, 'Tech Solutions Hub', 'info@techsolutionshub.com', '333-444-5555', 'Tech Solutions Hub provides a wide range of IT services.', 'Mark Williams', '777-888-9999', '456 IT Lane, IT City', 'Jointly worked on IT consulting projects.', 'Highly satisfied with their services.'),
(23, 'EcoEnergy Solutions', 'info@ecoenergy.com', '888-999-1111', 'EcoEnergy Solutions focuses on sustainable energy solutions.', 'Lisa Brown', '111-222-3333', '789 Green St, Greentown', 'Collaborated on renewable energy projects.', 'Positive impact on our energy efficiency.'),
(24, 'InnoMarketing Agency', 'contact@innomarketing.com', '222-333-4444', 'InnoMarketing Agency offers innovative marketing solutions.', 'Jake Turner', '444-555-6666', '987 Marketing Blvd, Marketville', 'Explored marketing campaign collaborations.', 'Creative and effective marketing strategies.'),
(25, 'BioTech Innovations', 'hr@biotechinnovations.com', '777-888-9999', 'BioTech Innovations focuses on cutting-edge biotechnology.', 'Emily White', '111-222-3333', '321 Bio Lane, Biocity', 'Collaborated on biotechnology research projects.', 'Their team has expertise in biotech advancements.'),
(26, 'Global Logistics Solutions', 'jobs@globallogistics.com', '555-666-7777', 'Global Logistics Solutions provides comprehensive logistics services.', 'Daniel Taylor', '333-444-5555', '555 Logistics Street, Logistictown', 'Worked together on optimizing supply chain processes.', 'Efficient and reliable logistics solutions.'),
(27, 'Future Innovations Corp.', 'future@innovationscorp.com', '111-222-3333', 'Future Innovations Corp. specializes in futuristic technologies.', 'Olivia Turner', '777-888-9999', '789 Future Blvd, Futuricity', 'Explored collaboration on emerging tech projects.', 'Positive testimonials from other clients.'),
(28, 'EduTech Solutions', 'jobs@edutechsolutions.com', '555-666-7777', 'EduTech Solutions focuses on innovative educational technologies.', 'John Mitchell', '333-444-5555', '456 Edu Lane, Edutown', 'Providing internships for educational tech projects.', 'Interns have contributed to our edtech solutions.'),
(29, 'Creative Minds Agency', 'creative@mindagency.com', '888-999-1111', 'Creative Minds Agency offers creative services and brand solutions.', 'Sophie Parker', '111-222-3333', '321 Creative Street, Creativetown', 'Collaborated on creative projects and branding.', 'Their team has a unique approach to creativity.'),
(30, 'Smart Solutions Co.', 'smart@smartco.com', '222-333-4444', 'Smart Solutions Co. provides intelligent solutions for businesses.', 'Michael Turner', '444-555-6666', '987 Smart Blvd, Smartville', 'Explored innovative solutions for business optimization.', 'Positive impact on our business processes.'),
(31, 'Tech Innovations Group', 'info@techinnovationsgroup.com', '777-888-9999', 'Tech Innovations Group specializes in cutting-edge tech solutions.', 'Emma Davis', '111-222-3333', '555 Tech Lane, Techland', 'Collaborated on various tech projects.', 'Impressed with their technical expertise.'),
(32, 'InnoHealth Solutions', 'careers@innohealthsolutions.com', '555-666-7777', 'InnoHealth Solutions focuses on innovative healthcare technologies.', 'David Miller', '333-444-5555', '789 Health Pkwy, Healthtown', 'Explored opportunities in healthcare tech.', 'Positive testimonials from healthcare professionals.'),
(33, 'Digital Marketing Pro', 'contact@digitalpro.com', '888-999-1111', 'Digital Marketing Pro specializes in digital marketing strategies.', 'Sophia Turner', '111-222-3333', '321 Digital Street, Digitaltown', 'Collaborated on digital marketing campaigns.', 'Effective and result-oriented digital marketing.'),
(34, 'GreenTech Innovations', 'hr@greentechinnovations.com', '222-333-4444', 'GreenTech Innovations focuses on eco-friendly technology solutions.', 'Daniel White', '444-555-6666', '987 Green Lane, Greentown', 'Worked on projects related to eco-friendly tech.', 'Positive impact on sustainability efforts.'),
(35, 'InnoConsulting Services', 'info@innoconsulting.com', '777-888-9999', 'InnoConsulting Services offers innovative management consulting.', 'Ava Johnson', '111-222-3333', '555 Consulting Blvd, Consultancy City', 'Collaborated on management consulting projects.', 'Their team provided valuable insights and solutions.'),
(36, 'TechTraining Solutions', 'training@techtrainingsolutions.com', '555-666-7777', 'TechTraining Solutions focuses on technology training programs.', 'James Turner', '333-444-5555', '456 Training Street, Techtown', 'Providing training opportunities for technology enthusiasts.', 'Positive feedback from participants in training programs.'),
(37, 'InnoRetail Solutions', 'info@innoretail.com', '888-999-1111', 'InnoRetail Solutions specializes in innovative retail technologies.', 'Lily Parker', '111-222-3333', '321 Retail Lane, Retailtown', 'Explored collaborations in retail tech solutions.', 'Positive impact on our retail operations.'),
(38, 'Financial Innovations Group', 'finance@innofinancegroup.com', '222-333-4444', 'Financial Innovations Group focuses on innovative financial solutions.', 'Noah Turner', '444-555-6666', '987 Finance Blvd, Financetown', 'Collaborated on projects related to financial innovations.', 'Their team provided strategic financial insights.'),
(39, 'InnoDesign Studios', 'design@innodesignstudios.com', '777-888-9999', 'InnoDesign Studios specializes in innovative design solutions.', 'Ella Johnson', '111-222-3333', '555 Design Street, Designtown', 'Collaborated on creative design projects.', 'Impressed with their unique design concepts.'),
(43, 'vsfdbg', 'sdvfdbgfnh@g.co', '9876543234', 'dsfdb', 'svfdbg', '8765432345', 'sgdhf', 'sfdgfnh', 'sfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `StudentRecords`
--

CREATE TABLE `StudentRecords` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Current_Education_Course` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Interested_Course` varchar(100) DEFAULT NULL,
  `Languages` varchar(100) DEFAULT NULL,
  `Local_Non_Local` varchar(20) DEFAULT NULL,
  `Father_Name` varchar(50) DEFAULT NULL,
  `Family_Income` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `StudentRecords`
--

INSERT INTO `StudentRecords` (`ID`, `Name`, `Age`, `Contact`, `Current_Education_Course`, `Address`, `Interested_Course`, `Languages`, `Local_Non_Local`, `Father_Name`, `Family_Income`) VALUES
(2, 'Jamal Smith', 23, '111-222-3333', 'Computer Science', '321 Pine Road', 'Artificial Intelligence', 'English', 'Non-local', 'Malik Smith', '$60,000'),
(3, 'Sophia Garcia', 21, '444-555-6666', 'Business Administration', '567 Cedar Lane', 'Finance', 'English, Spanish', 'Local', 'Javier Garcia', '$55,000'),
(4, 'Aisha Khan', 24, '777-888-9999', 'Law', '890 Birch Street', 'International Relations', 'English, Arabic', 'Non-local', 'Amir Khan', '$75,000'),
(5, 'Liam Nguyen', 19, '222-333-4444', 'Economics', '432 Willow Avenue', 'Public Policy', 'English, Vietnamese', 'Local', 'Minh Nguyen', '$40,000'),
(6, 'Isabella Lee', 22, '666-777-8888', 'Sociology', '987 Redwood Drive', 'Anthropology', 'English, Korean', 'Non-local', 'Jason Lee', '$65,000'),
(7, 'Mateo Hernandez', 26, '333-444-5555', 'Culinary Arts', '876 Magnolia Lane', 'Hospitality Management', 'English, Spanish', 'Local', 'Juan Hernandez', '$80,000'),
(8, 'Olivia Taylor', 20, '888-999-0000', 'Fine Arts', '543 Cherry Street', 'Graphic Design', 'English, French', 'Non-local', 'Adam Taylor', '$48,000'),
(9, 'Diego Martinez', 23, '555-666-7777', 'History', '234 Oakwood Drive', 'Political Science', 'English, Spanish', 'Local', 'Carlos Martinez', '$58,000'),
(10, 'Ava Brown', 21, '999-000-1111', 'Journalism', '678 Birch Lane', 'Communication', 'English, German', 'Non-local', 'James Brown', '$52,000'),
(11, 'Lucas Kim', 25, '777-888-9999', 'Mathematics', '345 Pine Avenue', 'Computer Engineering', 'English, Korean', 'Local', 'Sung Kim', '$72,000'),
(12, 'Maya Gupta', 22, '222-333-4444', 'Environmental Science', '123 Maple Drive', 'Renewable Energy', 'English, Hindi', 'Non-local', 'Raj Gupta', '$68,000'),
(13, 'Zoe Hernandez', 24, '888-999-0000', 'Public Health', '567 Elm Street', 'Epidemiology', 'English, Spanish', 'Local', 'Maria Hernandez', '$62,000'),
(14, 'Ethan Wilson', 20, '111-222-3333', 'Physics', '890 Oak Lane', 'Astrophysics', 'English', 'Non-local', 'David Wilson', '$47,000'),
(15, 'Emma Chen', 23, '444-555-6666', 'Chemistry', '234 Cedar Drive', 'Pharmaceutical Sciences', 'English, Mandarin', 'Local', 'Jenny Chen', '$57,000'),
(16, 'Elijah Thompson', 21, '666-777-8888', 'English Literature', '456 Pine Lane', 'Creative Writing', 'English', 'Non-local', 'Michael Thompson', '$53,000'),
(17, 'Ava Patel', 22, '333-444-5555', 'Film Studies', '789 Elm Avenue', 'Cinematography', 'English, Hindi', 'Local', 'Rahul Patel', '$60,000'),
(18, 'Mia Rodriguez', 25, '555-666-7777', 'Linguistics', '987 Birch Drive', 'TESOL', 'English, Spanish', 'Non-local', 'Carlos Rodriguez', '$70,000'),
(19, 'Sarah Johnson', 22, '123-456-7890', 'Biology Major', '123 Oak Street', 'Environmental Science', 'English, Spanish', 'Local', 'David Johnson', '$50,000'),
(20, 'Raj Patel', 25, '987-654-3210', 'Engineering', '456 Maple Avenue', 'Data Science', 'English, Hindi', 'Non-local', 'Sanjay Patel', '$70,000'),
(21, 'Sophie Clark', 24, '111-222-3333', 'Chemical Engineering', '789 Elm Street', 'Biotechnology', 'English, French', 'Local', 'Daniel Clark', '$65,000'),
(22, 'Landon White', 22, '444-555-6666', 'Computer Engineering', '345 Maple Avenue', 'Machine Learning', 'English, Spanish', 'Non-local', 'Ryan White', '$55,000'),
(23, 'Ella Adams', 23, '777-888-9999', 'Political Science', '567 Oak Lane', 'International Diplomacy', 'English, German', 'Local', 'Nathan Adams', '$60,000'),
(24, 'Noah Campbell', 21, '222-333-4444', 'Physics', '987 Cedar Street', 'Quantum Mechanics', 'English', 'Non-local', 'William Campbell', '$50,000'),
(25, 'Grace Evans', 20, '888-999-0000', 'Journalism', '654 Birch Drive', 'Broadcasting', 'English, Spanish', 'Local', 'Olivia Evans', '$45,000'),
(26, 'Jameson Carter', 25, '333-444-5555', 'Finance', '321 Pine Road', 'Investment Banking', 'English', 'Non-local', 'Henry Carter', '$70,000'),
(27, 'Aaliyah Foster', 24, '555-666-7777', 'Medicine', '876 Magnolia Lane', 'Pediatrics', 'English, Arabic', 'Local', 'Matthew Foster', '$75,000'),
(28, 'Mila Rivera', 22, '999-000-1111', 'Economics', '234 Oakwood Drive', 'Development Economics', 'English, Spanish', 'Non-local', 'Lucas Rivera', '$58,000'),
(29, 'Jackson Nguyen', 26, '777-888-9999', 'Computer Science', '543 Elm Avenue', 'Artificial Intelligence', 'English, Vietnamese', 'Local', 'Dylan Nguyen', '$80,000'),
(30, 'Avery Patel', 20, '111-222-3333', 'Psychology', '890 Cherry Street', 'Clinical Psychology', 'English, Hindi', 'Non-local', 'Zara Patel', '$48,000'),
(31, 'Evelyn Lopez', 21, '444-555-6666', 'Business Administration', '876 Willow Lane', 'Marketing Management', 'English, Spanish', 'Local', 'Gabriel Lopez', '$52,000'),
(32, 'Leo Wright', 23, '777-888-9999', 'Law', '234 Magnolia Drive', 'Corporate Law', 'English', 'Non-local', 'Nicholas Wright', '$62,000'),
(33, 'Hannah Kim', 22, '222-333-4444', 'Environmental Science', '789 Pine Road', 'Sustainable Development', 'English, Korean', 'Local', 'Grace Kim', '$68,000'),
(34, 'Owen Baker', 25, '888-999-0000', 'History', '345 Cedar Lane', 'Archaeology', 'English', 'Non-local', 'Nathan Baker', '$57,000'),
(35, 'Scarlett Murphy', 20, '555-666-7777', 'Fine Arts', '987 Oakwood Drive', 'Painting', 'English, French', 'Local', 'Michael Murphy', '$42,000'),
(36, 'Samuel Garcia', 24, '222-333-4444', 'Sociology', '654 Birch Street', 'Social Work', 'English, Spanish', 'Non-local', 'Diego Garcia', '$58,000'),
(37, 'Madelyn Martinez', 23, '777-888-9999', 'Education', '321 Elm Avenue', 'Special Education', 'English', 'Local', 'Mateo Martinez', '$56,000'),
(38, 'Henry Thompson', 21, '444-555-6666', 'Mathematics', '876 Cherry Drive', 'Statistics', 'English', 'Non-local', 'William Thompson', '$55,000'),
(39, 'Luna Wilson', 22, '111-222-3333', 'English Literature', '543 Pine Road', 'Literary Criticism', 'English, Spanish', 'Local', 'Ethan Wilson', '$48,000'),
(40, 'Grayson Nguyen', 24, '777-888-9999', 'Health Sciences', '890 Maple Lane', 'Nutrition', 'English, Vietnamese', 'Non-local', 'Henry Nguyen', '$63,000'),
(42, 'Caleb Brown', 20, '555-666-7777', 'Communications', '987 Cedar Drive', 'Digital Media', 'English', 'Non-local', 'Elijah Brown', '$50,000'),
(43, 'Aria Rodriguez', 22, '222-333-4444', 'Physics', '654 Oak Lane', 'Astrophysics', 'English, Spanish', 'Local', 'Daniel Rodriguez', '$58,000');

-- --------------------------------------------------------

--
-- Table structure for table `students_companies`
--

CREATE TABLE `students_companies` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `company_description` text DEFAULT NULL,
  `company_achievements` text DEFAULT NULL,
  `internships` int(11) DEFAULT NULL,
  `job_openings` int(11) DEFAULT NULL,
  `employee_reviews` text DEFAULT NULL,
  `application_process` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_companies`
--

INSERT INTO `students_companies` (`ID`, `name`, `email`, `contact`, `address`, `company_description`, `company_achievements`, `internships`, `job_openings`, `employee_reviews`, `application_process`) VALUES
(2, 'Global Innovations Inc', 'info@globalinnovations.com', '9876543210', '456 Future Avenue, Innovation Town', 'Driving innovation across global markets', 'Winner of Global Innovation Excellence Award', 8, 15, 'Dynamic workplace, continuous learning opportunities', 'Apply online through our career portal for job opportunities'),
(3, 'Green Energy Solutions', 'hr@greenenergy.com', '5551234567', '789 Eco Street, Green Valley', 'Leading the way in sustainable energy solutions', 'Certified for environmental sustainability practices', 10, 20, 'Diverse and inclusive culture, emphasis on work-life balance', 'Explore our website for open positions and apply online'),
(4, 'HealthTech Innovators', 'careers@healthtech.com', '6789876543', '890 Wellness Road, Healthville', 'Revolutionizing healthcare through technology', 'Recognized for advancements in health technology', 6, 12, 'Employee wellness programs, supportive team culture', 'Submit your CV and cover letter through our online application system'),
(5, 'Data Dynamics Corporation', 'jobs@datadynamicscorp.com', '1112223333', '456 Data Drive, Datatown', 'Empowering businesses through data-driven solutions', 'Industry leader in data analytics, Data Excellence Award', 7, 18, 'Innovative projects, professional development opportunities', 'Visit our careers page to apply for current job openings'),
(6, 'Infinite Innovations Ltd', 'careers@infiniteinnovations.com', '4445556666', '789 Infinity Street, Innovatown', 'Unleashing limitless possibilities through innovation', 'Pioneers in breakthrough technologies, Infinite Excellence Award', 12, 25, 'Collaborative and creative work environment', 'Apply online and demonstrate your innovative spirit'),
(7, 'EcoTech Solutions Group', 'info@ecotechsolutionsgroup.com', '7778889999', '123 Green Lane, Ecoville', 'Sustainable technology solutions for a greener world', 'Leaders in eco-friendly innovations, GreenTech Award', 9, 22, 'Commitment to environmental stewardship, employee well-being', 'Submit your application through our careers portal'),
(8, 'FutureTech Enterprises', 'careers@futuretechenterprises.com', '3334445555', '456 Tomorrow Avenue, Futuricity', 'Building the future through technology advancements', 'Visionaries in futuristic technologies, Future Excellence Award', 15, 30, 'Continuous learning, opportunities for career growth', 'Join us by applying to our open positions online'),
(9, 'Inclusive Innovations Inc', 'inclusive@innovationsinc.com', '6667778888', '789 Diversity Road, Inclusionville', 'Driving innovation through diversity and inclusion', 'Championing diversity and inclusion in the workplace', 8, 16, 'Inclusive culture, employee resource groups', 'Apply online to be a part of our diverse and innovative team'),
(10, 'HealthPlus Technologies', 'careers@healthplus.com', '1239874560', '456 Health Street, Wellness City', 'Transforming healthcare with technology solutions', 'Revolutionizing patient care, Healthcare Innovator Award', 10, 18, 'Focus on employee well-being, opportunities for career advancement', 'Explore our career opportunities and apply online'),
(11, 'Smart Solutions Group', 'careers@smartsolutionsgroup.com', '7894561230', '890 Smart Street, Smartsville', 'Innovative solutions for smart living and working', 'Smart Technology Excellence Award winner', 6, 15, 'Smart and collaborative work environment', 'Apply through our careers portal for exciting opportunities'),
(12, 'EduTech Innovations', 'careers@edutechinnovations.com', '9876543212', '123 Education Avenue, Edutown', 'Revolutionizing education through technology', 'Recognized for advancements in educational technology', 7, 14, 'Commitment to continuous learning, professional development', 'Join us in transforming education, apply online for positions'),
(13, 'AgriTech Dynamics', 'hr@agritechdynamics.com', '5554443333', '456 Agriculture Road, Farmville', 'Technology solutions for sustainable agriculture', 'Leading AgTech solutions provider, AgriTech Excellence Award', 9, 20, 'Supportive team, opportunities for career growth', 'Apply online for exciting opportunities in agricultural technology');

-- --------------------------------------------------------

--
-- Table structure for table `students_intermediate`
--

CREATE TABLE `students_intermediate` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `courses_offered` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `institution_type` varchar(50) DEFAULT NULL,
  `eligibility_criteria` text DEFAULT NULL,
  `fee_details` text DEFAULT NULL,
  `coaching_type` varchar(50) DEFAULT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_intermediate`
--

INSERT INTO `students_intermediate` (`ID`, `name`, `email`, `contact`, `courses_offered`, `address`, `institution_type`, `eligibility_criteria`, `fee_details`, `coaching_type`, `images`) VALUES
(2, 'Institution 2', 'info@institution2.com', '9876543210', 'Commerce, Economics, Business Studies', '456 Business Avenue, Townsville', 'School', 'Admission based on 10th-grade results', 'Tuition: $4,500 per semester', 'Online Coaching', 'btn1.jpg,btn2.jpg,btn3.jpg,btn4.jpg'),
(3, 'Institution 3', 'info@institution3.com', '5551234567', 'Biology, Chemistry, Physics', '789 Health Street, Healthville', 'School', 'Admission based on 10th-grade results', 'Tuition: $5,500 per semester', 'On-site Coaching', ''),
(4, 'Institution 4', 'info@institution4.com', '6789876543', 'Computer Science, Information Technology, Mathematics', '890 Tech Road, Techville', 'School', 'Admission based on 10th-grade results', 'Tuition: $5,000 per semester', 'Hybrid Coaching', ''),
(5, 'Institution 5', 'info@institution5.com', '1112223333', 'Fine Arts, Music, Drama', '456 Arts Lane, Artstown', 'School', 'Admission based on 10th-grade results and portfolio review', 'Tuition: $4,800 per semester', 'Offline Coaching', ''),
(6, 'Institution 6', 'info@institution6.com', '4445556666', 'Social Sciences, History, Geography', '789 Social Street, Socialville', 'School', 'Admission based on 10th-grade results', 'Tuition: $5,200 per semester', 'Online Coaching', ''),
(7, 'Institution 7', 'info@institution7.com', '7778889999', 'Environmental Science, Geography, Social Studies', '123 Eco Avenue, Ecotown', 'School', 'Admission based on 10th-grade results', 'Tuition: $5,800 per semester', 'On-site Coaching', ''),
(8, 'Institution 8', 'info@institution8.com', '3334445555', 'Civics, Law, Political Science', '456 Law Lane, Lawsville', 'School', 'Admission based on 10th-grade results', 'Tuition: $6,000 per semester', 'Hybrid Coaching', ''),
(9, 'Institution 9', 'info@institution9.com', '6667778888', 'Physics, Chemistry, Biology', '789 Science Street, Scienceville', 'School', 'Admission based on 10th-grade results', 'Tuition: $5,500 per semester', 'Online Coaching', ''),
(10, 'Institution 10', 'info@institution10.com', '1239874560', 'Mathematics, Statistics, Computer Science', '456 Math Road, Mathland', 'School', 'Admission based on 10th-grade results', 'Tuition: $5,200 per semester', 'Offline Coaching', ''),
(11, 'Institution 11', 'info@institution11.com', '7894561230', 'Journalism, Communication, English', '890 Media Avenue, Mediaville', 'School', 'Admission based on 10th-grade results', 'Tuition: $4,800 per semester', 'Hybrid Coaching', ''),
(12, 'Institution 12', 'info@institution12.com', '9876543212', 'Education, Psychology, Sociology', '123 Education Street, Edutown', 'School', 'Admission based on 10th-grade results', 'Tuition: $4,500 per semester', 'On-site Coaching', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies_institutions`
--
ALTER TABLE `companies_institutions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companies_students`
--
ALTER TABLE `companies_students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `institution_companies`
--
ALTER TABLE `institution_companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `StudentRecords`
--
ALTER TABLE `StudentRecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students_companies`
--
ALTER TABLE `students_companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students_intermediate`
--
ALTER TABLE `students_intermediate`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies_institutions`
--
ALTER TABLE `companies_institutions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `companies_students`
--
ALTER TABLE `companies_students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `institution_companies`
--
ALTER TABLE `institution_companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `StudentRecords`
--
ALTER TABLE `StudentRecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `students_companies`
--
ALTER TABLE `students_companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `students_intermediate`
--
ALTER TABLE `students_intermediate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
