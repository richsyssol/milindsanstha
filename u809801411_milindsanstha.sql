-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2024 at 11:49 AM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u809801411_milindsanstha`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `head` varchar(255) NOT NULL,
  `para` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `head`, `para`, `status`, `creation_on`) VALUES
(1, 'uploads/banner/3.png', 'Help us , help others!', 'Become a volunteer and donor today', 'Active', '2024-09-18 09:10:38'),
(2, 'uploads/banner/2.png', 'Donate or Volunteer!', 'Transform lives with your generosity', 'Active', '2024-09-18 09:13:43'),
(4, 'uploads/banner/WhatsApp Image 2024-09-27 at 11.43.28 AM.jpeg', 'Donate to Make a Difference', 'Your support changes lives', 'Active', '2024-09-27 06:00:41'),
(5, 'uploads/banner/5.png', 'Join Us in Honoring a Loved One', 'Together, we remember and celebrate their life', 'Active', '2024-09-27 06:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE `causes` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `head` text NOT NULL,
  `para` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `causes`
--

INSERT INTO `causes` (`id`, `image`, `head`, `para`, `status`, `creation_on`) VALUES
(1, 'uploads/causes/Untitled design (24).png', 'Funeral rites in case of death of unknown and homeless person', '<p>At Milind Sanstha, our mission extends to the dignified care of individuals both in life and in death. One of the most overlooked and heart-wrenching aspects of homelessness is the isolation experienced by individuals who pass away with no family or loved ones to claim their remains. Many unknown and homeless people die without anyone to perform their last rites, leaving them in a state of abandonment even in death. To honor the humanity of these individuals, Milind Sanstha ensures that proper funeral rites are conducted, offering them a respectful farewell.</p>\r\n\r\n<p><strong>The Tragic Reality of Death Among the Homeless</strong></p>\r\n\r\n<p>Homelessness is often a silent crisis, where individuals live and die unnoticed by society. For many, the streets are their only home, and without access to medical care, they suffer from untreated illnesses, malnutrition, and exposure to extreme weather conditions. Death comes as an inevitable reality for many of these individuals, often in complete solitude. Unfortunately, when a homeless person passes away, they are frequently left unclaimed, with no family to arrange their funeral or mourn their loss.</p>\r\n\r\n<p>This stark reality reflects the dehumanizing nature of homelessness&mdash;where not only life but also death can be marked by isolation and neglect. Without intervention, the remains of unknown and homeless individuals are often discarded without care, with no ceremony to acknowledge their existence. At Milind Sanstha, we believe that everyone deserves to be treated with dignity in death, just as in life.</p>\r\n\r\n<p><strong>A Dignified Farewell: Our Approach</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Locating the Unclaimed</strong><br />\r\n	When an unknown or homeless person passes away, they are often unidentified, and their bodies may remain unclaimed in hospitals or morgues. Milind Sanstha works closely with local authorities, hospitals, and community members to identify such cases and ensure that no one is forgotten in death. Our team is committed to stepping in when there is no family to arrange a funeral, offering a compassionate response to a tragic situation.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Conducting Proper Funeral Rites</strong><br />\r\n	At Milind Sanstha, we believe that every person deserves a proper funeral, regardless of their social or financial status. We take responsibility for organizing the funeral rites of homeless and unknown individuals, ensuring that their final journey is marked with respect and dignity. In accordance with the cultural and religious traditions of the deceased, we conduct the necessary rituals, whether it be cremation, burial, or other forms of last rites.</p>\r\n\r\n	<p>Our funerals are not just about following procedure; they are about honoring the life that was lived, no matter how invisible that life may have seemed to society. We gather volunteers and community members to participate in these ceremonies, offering prayers and remembrance for the deceased. This small but significant act of respect ensures that the individual is not forgotten, and their passing is marked with the dignity that every human being deserves.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Support for Those Left Behind</strong><br />\r\n	While many homeless individuals have no family, there are cases where distant or estranged family members come forward after the death. In these situations, Milind Sanstha provides support to help with funeral arrangements and offers counseling to those grieving the loss of a loved one. We also work to connect homeless individuals with potential support networks before they pass, aiming to prevent deaths in isolation whenever possible.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Community Involvement and Awareness</strong><br />\r\n	A key aspect of our mission is to raise awareness about the plight of the homeless, not just in life but also in death. We engage with local communities to foster a culture of empathy and respect for homeless individuals, encouraging others to take action and support those in need. Through our funeral rites initiative, we hope to remind society that every life, regardless of circumstance, is valuable and worthy of recognition.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Preserving Dignity in Death</strong></p>\r\n\r\n<p>The death of an unknown or homeless person should not go unnoticed. At Milind Sanstha, we are committed to ensuring that these individuals receive the respect they deserve in their final moments. Through our funeral rites program, we strive to restore dignity to those who were forgotten in life and to offer them a peaceful farewell in death.</p>\r\n', 'Active', '2024-09-19 04:36:49'),
(2, 'uploads/causes/Untitled design (26).png', 'Shelter for orphans and people suffering from chronic diseases', '<p>At Milind Sanstha, we recognize the profound need for support among two of the most vulnerable groups in society orphans and people suffering from chronic diseases. These individuals often face immense challenges, including neglect, loneliness, and the absence of basic care. Our mission is to provide them with a safe, nurturing environment where they can find shelter, receive medical care, and regain hope for a brighter future. By offering both physical and emotional support, we strive to create a compassionate space where orphans and chronically ill individuals can heal, grow, and thrive.</p>\r\n\r\n<p><strong>The Plight of Orphans</strong></p>\r\n\r\n<p>Orphaned children face unique challenges in life. Many of them have lost not only their parents but also the emotional and financial security that comes with a family. Without proper care and guidance, they are at risk of malnutrition, lack of education, and exposure to various forms of abuse. Growing up without a stable home or loving guardians can leave deep emotional scars, making it difficult for them to trust others or imagine a future filled with possibilities.</p>\r\n\r\n<p>At Milind Sanstha, we are committed to addressing the needs of these children by providing them with a safe, loving home. Our shelters offer not only physical protection but also emotional support and educational opportunities. Here, orphans are given the chance to live in a family-like environment where they receive attention, care, and the nurturing they need to develop into healthy, happy individuals.</p>\r\n\r\n<p><strong>Chronic Diseases: A Lifelong Struggle</strong></p>\r\n\r\n<p>Chronic diseases such as cancer, diabetes, kidney failure, and other debilitating conditions can strip people of their ability to lead normal lives. Individuals suffering from chronic diseases often require long-term medical treatment, care, and support, but many do not have the financial resources or family backing to access them. Some find themselves abandoned, while others struggle to survive without proper healthcare.</p>\r\n\r\n<p>The effects of chronic illness extend beyond the physical; they often cause emotional distress, anxiety, and a deep sense of isolation. Many patients with chronic diseases feel like a burden on their families or society and may face discrimination or stigma because of their conditions. At Milind Sanstha, we work to ensure that no one is left to suffer alone.</p>\r\n\r\n<p><strong>Our Approach</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Safe Shelter and Care for Orphans</strong><br />\r\n	Our shelter for orphans is more than just a place to live; it is a home where children feel loved, valued, and supported. Our dedicated staff and volunteers create a nurturing environment that mimics the warmth and security of a family. Orphans are provided with nutritious meals, clothing, and proper hygiene facilities to ensure their physical well-being.</p>\r\n\r\n	<p>Education is also a priority at Milind Sanstha. We believe that every child deserves the opportunity to learn and grow, so we provide orphans with access to quality education and extracurricular activities. Through tutoring, skill-building workshops, and mentorship programs, we aim to equip these children with the tools they need to achieve their dreams.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Comprehensive Care for People with Chronic Diseases</strong><br />\r\n	For those suffering from chronic illnesses, we offer a sanctuary where they can receive the treatment and support they need. Our shelter provides a clean, safe space for patients who may otherwise be living in poverty or on the streets due to their medical conditions. Our team of healthcare professionals ensures that each individual receives the appropriate medication, regular check-ups, and the necessary care for their condition.</p>\r\n\r\n	<p>In addition to medical support, we provide counseling services to help patients cope with the emotional strain of living with a chronic disease. Our goal is to alleviate their suffering, reduce their sense of isolation, and foster a sense of community among those in our care.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Emotional and Psychological Support</strong><br />\r\n	The emotional toll of losing parents or living with a chronic illness can be overwhelming. At Milind Sanstha, we focus on providing holistic care that addresses the mental and emotional well-being of our residents. For orphans, we offer counseling and mentorship programs to help them process grief and develop self-esteem. For individuals with chronic diseases, we provide emotional support through therapy and peer groups, helping them build resilience and maintain a positive outlook.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Path to a Brighter Future</strong><br />\r\n	Our shelter not only provides immediate relief but also works to build a sustainable future for those in need. For orphans, this means access to education, vocational training, and life skills that prepare them for independent adulthood. For patients with chronic illnesses, we focus on rehabilitation and empowering them to manage their conditions while maintaining as much independence as possible.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Be a Beacon of Hope</strong></p>\r\n\r\n<p>At Milind Sanstha, our shelter serves as a beacon of hope for orphans and those suffering from chronic diseases. We are dedicated to providing a safe and caring environment where every individual, regardless of their past or current circumstances, can find a path to a better future. Join us in making a difference&mdash;because everyone deserves a place to call home and the support to live with dignity.</p>\r\n', 'Active', '2024-09-19 04:37:12'),
(3, 'uploads/causes/Untitled design (23).png', 'Helping destitute/homeless people', '<p>At Milind Sanstha, our commitment to uplift those in need extends to the most vulnerable members of society&mdash;destitute and homeless individuals. These individuals, often left without the basic necessities of life such as food, shelter, and medical care, face tremendous challenges. We believe that no one should be left to struggle alone on the streets, which is why we strive to provide not just temporary relief but long-term solutions to help destitute and homeless people rebuild their lives. Our programs are designed to restore dignity, provide a safe environment, and offer a pathway to independence for those in need.</p>\r\n\r\n<p><strong>The Harsh Reality of Homelessness</strong></p>\r\n\r\n<p>Homelessness is a complex and growing issue, affecting millions worldwide, including in India. People become homeless for various reasons, including unemployment, lack of affordable housing, mental health issues, illness, or the loss of family support. Living without a home is not only physically exhausting but also emotionally devastating. For many, the street becomes a dangerous place where they are exposed to violence, harsh weather conditions, and severe health risks.</p>\r\n\r\n<p>The destitute, including elderly individuals and families who have lost their livelihoods, struggle to survive daily. With no access to clean water, healthcare, or even basic nutrition, their quality of life deteriorates rapidly. At Milind Sanstha, we believe that everyone deserves a second chance, and our goal is to provide immediate assistance to those who need it the most.</p>\r\n\r\n<p><strong>Our Approach</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Providing Shelter</strong><br />\r\n	One of the most immediate needs for the homeless is shelter&mdash;a safe and secure place to stay. At Milind Sanstha, we offer temporary shelters that provide a refuge for those living on the streets. These shelters are more than just a roof over their heads; they are a haven where individuals can regain a sense of safety, security, and stability.</p>\r\n\r\n	<p>Our shelters provide clean bedding, proper sanitation facilities, and meals, ensuring that basic needs are met. These facilities are designed to offer comfort and dignity, giving homeless individuals the space to rest, recover, and begin the process of rebuilding their lives. We also provide specialized shelter programs for families, women, and the elderly, ensuring that every vulnerable group is cared for.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Essential Services: Food and Medical Care</strong><br />\r\n	Hunger and poor health are two of the most pressing issues faced by destitute and homeless people. Many do not have access to even a single meal a day, and the lack of proper nutrition further weakens their bodies. At Milind Sanstha, we organize daily meal programs that serve nutritious food to the homeless. Our team ensures that everyone in our care receives the proper nourishment they need to regain their strength.</p>\r\n\r\n	<p>We also provide essential medical services, including health check-ups, medication, and treatments for those suffering from chronic or untreated illnesses. For many homeless individuals, access to healthcare is virtually nonexistent, and our medical camps offer them the opportunity to receive life-saving treatments.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Counseling and Support</strong><br />\r\n	Homelessness takes a heavy toll not only on physical well-being but also on mental health. Many homeless individuals face trauma, depression, and a sense of hopelessness due to their circumstances. At Milind Sanstha, we offer counseling services to help them cope with the emotional challenges of their situation.</p>\r\n\r\n	<p>Through our counseling programs, we offer a space for individuals to talk about their struggles, regain self-confidence, and work towards rebuilding their future. Our trained counselors provide emotional support and guidance, helping people set achievable goals for their lives and build a sense of purpose.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pathway to Independence</strong><br />\r\n	Our ultimate goal is to help homeless and destitute individuals move from crisis to stability. For those who are able, we offer vocational training programs and job placement assistance. By providing them with the skills they need to find employment, we help them regain their independence and self-sufficiency.</p>\r\n\r\n	<p>We also work closely with local communities to raise awareness about homelessness and destitution, encouraging greater compassion and action toward these vulnerable populations.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Be Part of the Solution</strong></p>\r\n\r\n<p>At Milind Sanstha, we believe in the power of community and compassion to transform lives. By helping destitute and homeless individuals, we are working to create a society where no one is left behind. Through our shelter, medical, and counseling programs, we aim to provide not just temporary relief but lasting change. Join us in our mission to restore hope and dignity to those who need it the most. Together, we can make a meaningful difference in the lives of destitute and homeless people.</p>\r\n', 'Active', '2024-09-19 04:37:34'),
(5, 'uploads/causes/Untitled design (25).png', 'Medication and shelter if the relatives leave the patients bereft', '<p>At Milind Sanstha, we stand by those who have been left in the darkest moments of their lives patients abandoned by their families due to illness, disability, or age. When relatives and loved ones walk away, often leaving patients helpless and without support, our mission is to step in and provide them with the care, medication, and shelter they need to survive and thrive. Through our compassionate approach, we aim to give these individuals hope, dignity, and the possibility of a better future, regardless of their circumstances.</p>\r\n\r\n<p><strong>The Pain of Abandonment</strong></p>\r\n\r\n<p>It is a heartbreaking reality that many people, particularly those suffering from chronic illnesses, mental health disorders, or disabilities, are often abandoned by their families. In many cases, these patients are seen as a burden financially, emotionally, or socially and are left alone, with no one to care for them. This abandonment can occur at hospitals, in care homes, or even on the streets, leaving patients bereft of both physical support and emotional care.</p>\r\n\r\n<p>The reasons for abandonment may vary, but the effects are devastating. Many of these patients lose not only the care and companionship of their loved ones but also access to essential medical treatment, shelter, and even the basic necessities of life. At Milind Sanstha, we are committed to ensuring that no one is left to face these challenges alone.</p>\r\n\r\n<p><strong>Our Approach</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Immediate Medical Care</strong><br />\r\n	At Milind Sanstha, we believe that healthcare is a basic human right, and no patient should be denied treatment, especially during times of need. When we rescue or come across patients who have been abandoned by their families, our first priority is to assess their health condition and ensure they receive immediate medical attention. Whether they are suffering from chronic illnesses, infectious diseases, or disabilities, our team of healthcare professionals provides them with the necessary medication and treatment.</p>\r\n\r\n	<p>We partner with hospitals, clinics, and local healthcare providers to offer free or subsidized medical services, ensuring that all patients receive the care they need to recover. For those with long-term health conditions, we offer ongoing treatment and regular check-ups to monitor their progress and adjust their treatment plans as needed.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Safe Shelter and Care</strong><br />\r\n	In addition to medical care, one of the greatest needs of abandoned patients is a safe and stable place to live. Many of these individuals, once left by their families, have no home to return to and are at risk of homelessness. Our shelters at Milind Sanstha are designed to offer a secure and comfortable environment where patients can live with dignity.</p>\r\n\r\n	<p>These shelters provide not only basic amenities such as food, clothing, and bedding but also emotional support and a sense of community. Here, patients are cared for by our compassionate staff, who work tirelessly to ensure their well-being. For many of these individuals, the shelter becomes a place of refuge, where they can rebuild their lives and regain hope for the future.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Emotional and Psychological Support</strong><br />\r\n	The emotional impact of being abandoned by loved ones can be immense. Patients often experience feelings of rejection, isolation, and worthlessness, which can exacerbate their physical conditions. At Milind Sanstha, we recognize the importance of emotional healing and provide counseling services to help patients process their trauma and begin the journey toward recovery.</p>\r\n\r\n	<p>Through individual therapy sessions, group counseling, and peer support networks, we help patients regain their sense of self-worth and build new connections with others who understand their struggles. Our goal is to help them feel valued and supported, so they can heal both physically and emotionally.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Reintegration and Independence</strong><br />\r\n	While we provide medication and shelter, we also aim to empower our patients to live independently. For those who are able, we offer vocational training and skill development programs, helping them acquire the tools they need to earn a living and support themselves. We also assist with job placements and other opportunities that allow patients to reintegrate into society with confidence.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Be a Part of the Change</strong></p>\r\n\r\n<p>At Milind Sanstha, we believe that no one should be left to suffer alone. Every individual, regardless of their health or circumstances, deserves care, compassion, and a chance at a dignified life. By providing medication, shelter, and emotional support to patients abandoned by their families, we aim to give them a new lease on life. Join us in our mission to ensure that no patient is ever left bereft or forgotten. Together, we can make a difference.</p>\r\n', 'Active', '2024-09-23 10:33:24'),
(6, 'uploads/causes/Untitled design (22).png', 'Treatment and shelter for AIDS, HIV and leprosy patients', '<p>At Milind Sanstha, we are dedicated to addressing the needs of some of the most vulnerable and marginalized groups in our society&mdash;those affected by HIV/AIDS and leprosy. These individuals are often stigmatized and neglected, facing not only the physical toll of their illnesses but also social isolation and discrimination. Our mission is to provide them with access to proper medical treatment, a safe shelter, and the dignity they deserve. Through our efforts, we aim to restore hope and offer a better quality of life for those affected by these debilitating conditions.</p>\r\n\r\n<p><strong>The Challenges of Living with HIV/AIDS and Leprosy</strong></p>\r\n\r\n<p>In India, HIV/AIDS and leprosy continue to pose significant health challenges. Patients diagnosed with these conditions often face social ostracization, making it difficult for them to access basic services such as healthcare, housing, and employment. Many are abandoned by their families and communities, left to fend for themselves in a world that offers little support or understanding. For people living with HIV/AIDS, the stigma can be just as devastating as the disease itself, leading to severe emotional and psychological distress.</p>\r\n\r\n<p>Leprosy patients, despite advances in medical treatment, often experience similar discrimination due to longstanding myths and misconceptions about the disease. These patients frequently suffer from disfigurement, disability, and isolation, with very few avenues of support.</p>\r\n\r\n<p><strong>Our Approach</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Comprehensive Medical Treatment</strong><br />\r\n	Milind Sanstha&rsquo;s first priority is ensuring that patients affected by HIV/AIDS and leprosy receive proper medical care. We partner with healthcare professionals and hospitals to provide access to antiretroviral therapy (ART) for HIV/AIDS patients and multidrug therapy (MDT) for those affected by leprosy. These treatments are essential for managing the diseases and improving the quality of life for patients.</p>\r\n\r\n	<p>We also conduct regular medical camps to provide screening, treatment, and follow-up care for these patients, ensuring they receive continuous support throughout their treatment journey. In addition to medication, we offer psychological counseling and health education, helping patients better understand their conditions and the importance of adherence to treatment.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Safe Shelter and Dignified Living</strong><br />\r\n	One of the greatest challenges faced by patients with HIV/AIDS and leprosy is homelessness. Many patients, especially those abandoned by their families or unable to work due to their illness, have nowhere to turn for shelter. Milind Sanstha provides a safe and secure environment for these individuals through our shelters.</p>\r\n\r\n	<p>Our shelters are designed to be more than just a place to stay; they are a sanctuary where patients can live with dignity, free from discrimination and stigma. We ensure that residents have access to proper nutrition, clean facilities, and a supportive community where they can rebuild their lives. Our aim is to create a space where patients feel valued and respected, enabling them to regain their sense of self-worth and independence.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Counseling and Emotional Support</strong><br />\r\n	Living with HIV/AIDS or leprosy can be emotionally draining, as patients often face feelings of shame, fear, and isolation. At Milind Sanstha, we understand that emotional healing is just as important as physical treatment. Our team of trained counselors provides regular emotional support to help patients cope with the psychological effects of their conditions.</p>\r\n\r\n	<p>Through group sessions and one-on-one counseling, we encourage patients to share their experiences, express their fears, and build a support network among fellow residents. This peer support helps reduce feelings of loneliness and fosters a sense of belonging within the community.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Reintegration into Society</strong><br />\r\n	Our ultimate goal is to help patients reintegrate into society once they have regained their health and confidence. For HIV/AIDS patients, we provide vocational training and employment opportunities, enabling them to become financially independent. For leprosy patients, we focus on restoring their mobility and self-sufficiency through rehabilitation programs.</p>\r\n\r\n	<p>We also work to raise awareness in local communities to reduce the stigma surrounding HIV/AIDS and leprosy, advocating for greater acceptance and support for those affected by these conditions.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>Together, We Can Make a Difference</strong></p>\r\n\r\n<p>At Milind Sanstha, we believe that every individual, regardless of their health status, deserves to live with dignity and respect. By providing treatment, shelter, and support to patients with HIV/AIDS and leprosy, we aim to change lives and offer a new beginning. Join us in our mission to create a world where no one is left behind, and every person has the chance to live a fulfilling life.</p>\r\n', 'Active', '2024-09-23 10:39:39'),
(7, 'uploads/causes/NGO-for-children-banner.jpg', 'Education and upbringing of orphan children at railway station', '<p>Milind Sanstha is committed to addressing one of the most pressing social issues faced by our society today&mdash;the plight of orphaned and homeless children living at railway stations. These children, often abandoned or displaced, are forced to survive in a challenging environment, deprived of the basic necessities that every child deserves: a safe home, proper care, and education. Our mission at Milind Sanstha is to step in where hope seems lost and create a nurturing path forward for these vulnerable children.</p>\r\n\r\n<p><strong>The Harsh Reality of Railway Station Life</strong></p>\r\n\r\n<p>India&#39;s railway stations have, unfortunately, become a refuge for many homeless children. They arrive here through various tragic circumstances&mdash;some are abandoned by their families, while others run away from abusive homes. For these children, the station becomes their shelter, but it is far from a place of safety. They face numerous dangers including exploitation, substance abuse, and crime. Most importantly, they are deprived of education, which is the key to breaking the cycle of poverty and despair.</p>\r\n\r\n<p>At Milind Sanstha, we believe that no child should be forgotten or left to fend for themselves in such dire conditions. Our initiative focuses on providing these orphaned children with the opportunities they need to live a dignified life, starting with education and secure upbringing.</p>\r\n\r\n<p><strong>Our Approach</strong></p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Rescue and Rehabilitation</strong><br />\r\n	The first step in our journey with these children is rescue and rehabilitation. We have a team that actively works at railway stations to identify and rescue children who are orphaned or in distress. These children are often in a fragile state, both emotionally and physically, and our immediate goal is to bring them to a safe environment where they can begin their journey toward healing.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Shelter and Care</strong><br />\r\n	Once rescued, the children are brought to our shelters, where they are provided with proper care, food, clothing, and medical attention. The shelters are designed to offer a loving and nurturing environment, helping these children regain a sense of stability and trust. Our caregivers and counselors work closely with each child to understand their emotional needs, providing counseling and support to help them recover from the trauma they have faced.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Education as the Key to Transformation</strong><br />\r\n	Education is at the heart of our mission. We firmly believe that education is the most powerful tool to empower these children and give them a chance at a better future. At Milind Sanstha, we enroll the children in local schools and provide them with all the necessary learning materials. We also offer additional tutoring and mentorship to help them catch up on any missed education and to excel in their studies.</p>\r\n\r\n	<p>By providing a structured and continuous education, we are not only giving these children the tools to build a future but also helping them gain confidence, social skills, and self-reliance. Every child deserves the opportunity to learn and grow, and our goal is to ensure that these children are not left behind.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Life Skills and Personal Development</strong><br />\r\n	In addition to formal education, we focus on teaching life skills that are essential for the children&rsquo;s holistic development. These include vocational training, personal hygiene, emotional intelligence, and social behavior. By equipping them with these skills, we prepare them for the challenges of adulthood and help them become self-sufficient individuals who can contribute positively to society.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>A Brighter Future</strong></p>\r\n\r\n<p>Our work does not stop at providing education and care. Milind Sanstha ensures that every child under our care is supported through their journey into adulthood. We offer guidance and career support, helping them transition from school to a fulfilling professional life. Whether it is through higher education, vocational training, or job placement, we stand by these children, ensuring they have the tools and opportunities to lead a successful life.</p>\r\n\r\n<p><strong>Join Us in Making a Difference</strong></p>\r\n\r\n<p>At Milind Sanstha, we believe that every child deserves love, care, and education, no matter where they come from. Together, we can make a significant impact in the lives of orphaned children at railway stations by providing them with the support they need to thrive. Join us in this mission and help us create a brighter future for these children.</p>\r\n', 'Active', '2024-09-23 10:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `image`, `status`, `creation_on`) VALUES
(1, 'uploads/certificate/birajuu0073.jpg', 'Active', '2024-09-23 11:48:28'),
(2, 'uploads/certificate/birajuu0075.jpg', 'Active', '2024-09-23 11:52:02'),
(3, 'uploads/certificate/O.jpg', 'Active', '2024-09-23 11:52:02'),
(4, 'uploads/certificate/O0002.jpg', 'Active', '2024-09-23 11:57:16'),
(5, 'uploads/certificate/O0003.jpg', 'Active', '2024-09-23 11:57:16'),
(6, 'uploads/certificate/O0008.jpg', 'Active', '2024-09-23 11:57:16'),
(7, 'uploads/certificate/O0009.jpg', 'Active', '2024-09-23 11:57:16'),
(8, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.21 (1).jpeg', 'Active', '2024-09-23 11:59:56'),
(9, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.25 (1).jpeg', 'Active', '2024-09-23 11:59:56'),
(10, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.44 (1).jpeg', 'Active', '2024-09-23 11:59:56'),
(11, 'uploads/certificate/WhatsApp Image 2024-09-06 at 1.50.43 PM.jpeg', 'Active', '2024-09-23 11:59:56'),
(12, 'uploads/certificate/WhatsApp Image 2024-09-16 at 1.28.16 PM (1).jpeg', 'Active', '2024-09-23 11:59:56'),
(13, 'uploads/certificate/WhatsApp Image 2024-09-16 at 1.57.38 PM (1).jpeg', 'Active', '2024-09-23 12:00:41'),
(14, 'uploads/certificate/birajuu0072.jpg', 'Active', '2024-09-23 12:02:19'),
(15, 'uploads/certificate/birajuu0074.jpg', 'Active', '2024-09-23 12:02:19'),
(16, 'uploads/certificate/birajuu0076.jpg', 'Active', '2024-09-23 12:02:19'),
(17, 'uploads/certificate/O0001.jpg', 'Active', '2024-09-23 12:02:19'),
(18, 'uploads/certificate/O0011.jpg', 'Active', '2024-09-23 12:02:19'),
(20, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.03.jpeg', 'Active', '2024-09-23 12:02:19'),
(21, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.09.jpeg', 'Active', '2024-09-23 12:02:19'),
(22, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.19 (1).jpeg', 'Active', '2024-09-23 12:02:19'),
(23, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.21.jpeg', 'Active', '2024-09-23 12:02:19'),
(24, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.05.45 (1).jpeg', 'Active', '2024-09-23 12:03:28'),
(25, 'uploads/certificate/WhatsApp Image 2023-08-10 at 20.06.00 (1).jpeg', 'Active', '2024-09-23 12:03:28'),
(26, 'uploads/certificate/WhatsApp Image 2024-09-06 at 1.50.42 PM.jpeg', 'Active', '2024-09-23 12:03:28'),
(27, 'uploads/certificate/WhatsApp Image 2024-09-16 at 1.57.39 PM (2).jpeg', 'Active', '2024-09-23 12:03:28'),
(28, 'uploads/certificate/WhatsApp Image 2024-09-16 at 1.57.39 PM.jpeg', 'Active', '2024-09-23 12:03:28'),
(29, 'uploads/certificate/WhatsApp Image 2024-09-16 at 1.57.40 PM.jpeg', 'Active', '2024-09-23 12:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `image_type`
--

CREATE TABLE `image_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_type`
--

INSERT INTO `image_type` (`id`, `type_name`) VALUES
(1, 'Animal'),
(2, 'Human'),
(3, 'Body Disposal');

-- --------------------------------------------------------

--
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`id`, `image`, `status`, `creation_on`) VALUES
(1, 'uploads/letters/birajuu0010.jpg', 'Active', '2024-09-27 09:16:11'),
(2, 'uploads/letters/birajuu0041.jpg', 'Active', '2024-09-27 09:16:11'),
(3, 'uploads/letters/birajuu0077.jpg', 'Active', '2024-09-27 09:16:11'),
(4, 'uploads/letters/birajuu0084.jpg', 'Active', '2024-09-27 09:16:11'),
(5, 'uploads/letters/birajuu0086.jpg', 'Active', '2024-09-27 09:16:11'),
(6, 'uploads/letters/birajuu0087.jpg', 'Active', '2024-09-27 09:16:11'),
(7, 'uploads/letters/birajuu0089.jpg', 'Active', '2024-09-27 09:16:11'),
(8, 'uploads/letters/birajuu0091.jpg', 'Active', '2024-09-27 09:16:11'),
(9, 'uploads/letters/birajuu0092.jpg', 'Active', '2024-09-27 09:16:11'),
(10, 'uploads/letters/birajuu0093.jpg', 'Active', '2024-09-27 09:16:11'),
(11, 'uploads/letters/birajuu0094.jpg', 'Active', '2024-09-27 09:16:11'),
(12, 'uploads/letters/birajuu0095.jpg', 'Active', '2024-09-27 09:16:11'),
(13, 'uploads/letters/birajuu0096.jpg', 'Active', '2024-09-27 09:16:11'),
(14, 'uploads/letters/birajuu0100.jpg', 'Active', '2024-09-27 09:16:11'),
(15, 'uploads/letters/birajuu0101.jpg', 'Active', '2024-09-27 09:16:11'),
(16, 'uploads/letters/birajuu0103.jpg', 'Active', '2024-09-27 09:16:11'),
(17, 'uploads/letters/birajuu0104.jpg', 'Active', '2024-09-27 09:16:11'),
(18, 'uploads/letters/birajuu0105.jpg', 'Active', '2024-09-27 09:16:11'),
(19, 'uploads/letters/birajuu0106.jpg', 'Active', '2024-09-27 09:16:11'),
(20, 'uploads/letters/birajuu0110.jpg', 'Active', '2024-09-27 09:16:11'),
(21, 'uploads/letters/birajuu0121.jpg', 'Active', '2024-09-27 09:16:57'),
(22, 'uploads/letters/O0005.jpg', 'Active', '2024-09-27 09:16:57'),
(23, 'uploads/letters/O0007.jpg', 'Active', '2024-09-27 09:16:57'),
(24, 'uploads/letters/WhatsApp Image 2023-08-10 at 20.05.04.jpeg', 'Active', '2024-09-27 09:16:57'),
(25, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.17 PM (1).jpeg', 'Active', '2024-09-27 09:16:57'),
(26, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.17 PM.jpeg', 'Active', '2024-09-27 09:16:57'),
(27, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.19 PM (1).jpeg', 'Active', '2024-09-27 09:16:57'),
(28, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.19 PM.jpeg', 'Active', '2024-09-27 09:16:57'),
(29, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.20 PM (1).jpeg', 'Active', '2024-09-27 09:16:57'),
(30, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.20 PM (2).jpeg', 'Active', '2024-09-27 09:16:57'),
(31, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.21 PM (1).jpeg', 'Active', '2024-09-27 09:16:57'),
(32, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.21 PM (2).jpeg', 'Active', '2024-09-27 09:16:57'),
(33, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.21 PM.jpeg', 'Active', '2024-09-27 09:16:57'),
(34, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.22 PM (1).jpeg', 'Active', '2024-09-27 09:16:57'),
(35, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.22 PM (2).jpeg', 'Active', '2024-09-27 09:16:57'),
(36, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.22 PM.jpeg', 'Active', '2024-09-27 09:16:57'),
(37, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.23 PM (1).jpeg', 'Active', '2024-09-27 09:16:57'),
(38, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.23 PM (2).jpeg', 'Active', '2024-09-27 09:17:15'),
(39, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.23 PM.jpeg', 'Active', '2024-09-27 09:17:15'),
(40, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.24 PM (1).jpeg', 'Active', '2024-09-27 09:17:15'),
(41, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.24 PM.jpeg', 'Active', '2024-09-27 09:17:15'),
(42, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.25 PM (1).jpeg', 'Active', '2024-09-27 09:17:15'),
(43, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.25 PM (2).jpeg', 'Active', '2024-09-27 09:17:15'),
(44, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.25 PM (3).jpeg', 'Active', '2024-09-27 09:17:15'),
(45, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.25 PM.jpeg', 'Active', '2024-09-27 09:17:15'),
(46, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.26 PM (1).jpeg', 'Active', '2024-09-27 09:17:15'),
(47, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.26 PM.jpeg', 'Active', '2024-09-27 09:17:15'),
(48, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.27 PM (1).jpeg', 'Active', '2024-09-27 09:17:15'),
(49, 'uploads/letters/WhatsApp Image 2024-09-16 at 1.28.27 PM.jpeg', 'Active', '2024-09-27 09:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `milind_sanstha`
--

CREATE TABLE `milind_sanstha` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `head` text NOT NULL,
  `about` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milind_sanstha`
--

INSERT INTO `milind_sanstha` (`id`, `image`, `head`, `about`, `status`, `creation_on`) VALUES
(1, 'uploads/milind_sanstha/Untitled design (28).png', 'If we Helping Each other then the world growing. ', '<p>Since 2004 , Milind Sanstha is a dedicated charity organization committed to supporting the most vulnerable members of our society. We focus on the education and upbringing of orphans, providing them with the care and resources they need to thrive. Our organization offers treatment and shelter for individuals affected by AIDS, HIV, and leprosy, ensuring they receive the dignity and support they deserve.</p>\r\n\r\n<p>We also extend our efforts to assist destitute and homeless individuals, providing them with essential services and shelter. Our facilities cater to orphans and those suffering from chronic diseases, creating a safe haven for healing and growth. Additionally, we honor the deceased by conducting funeral rites for unknown and homeless persons, ensuring that every life is respected and remembered.</p>\r\n\r\n<p>Through our comprehensive programs, Milind Sanstha strives to create a compassionate community where everyone has the opportunity to lead a dignified life.</p>\r\n', 'Active', '2024-09-21 11:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `status`, `creation_on`) VALUES
(1, 'uploads/news/birajuu0012.jpg', 'Active', '2024-09-23 12:16:52'),
(2, 'uploads/news/birajuu0013.jpg', 'Active', '2024-09-23 12:16:52'),
(3, 'uploads/news/birajuu0014.jpg', 'Active', '2024-09-23 12:16:52'),
(4, 'uploads/news/birajuu0015.jpg', 'Active', '2024-09-23 12:16:52'),
(5, 'uploads/news/birajuu0016.jpg', 'Active', '2024-09-23 12:16:52'),
(6, 'uploads/news/birajuu0017.jpg', 'Active', '2024-09-23 12:16:52'),
(7, 'uploads/news/birajuu0018.jpg', 'Active', '2024-09-23 12:16:52'),
(8, 'uploads/news/birajuu0042.jpg', 'Active', '2024-09-23 12:16:52'),
(9, 'uploads/news/birajuu0043.jpg', 'Active', '2024-09-23 12:16:52'),
(10, 'uploads/news/birajuu0044.jpg', 'Active', '2024-09-23 12:16:52'),
(11, 'uploads/news/birajuu0045.jpg', 'Active', '2024-09-23 12:17:54'),
(12, 'uploads/news/birajuu0048.jpg', 'Active', '2024-09-23 12:17:54'),
(13, 'uploads/news/birajuu0049.jpg', 'Active', '2024-09-23 12:17:54'),
(14, 'uploads/news/birajuu0050.jpg', 'Active', '2024-09-23 12:17:54'),
(15, 'uploads/news/birajuu0053.jpg', 'Active', '2024-09-23 12:17:54'),
(16, 'uploads/news/birajuu0055.jpg', 'Active', '2024-09-23 12:17:54'),
(17, 'uploads/news/birajuu0059.jpg', 'Active', '2024-09-23 12:17:54'),
(18, 'uploads/news/birajuu0060 copy.jpg', 'Active', '2024-09-23 12:17:54'),
(19, 'uploads/news/birajuu0064 copy.jpg', 'Active', '2024-09-23 12:17:54'),
(20, 'uploads/news/birajuu0067.jpg', 'Active', '2024-09-23 12:17:54'),
(21, 'uploads/news/birajuu0068.jpg', 'Active', '2024-09-23 12:17:54'),
(22, 'uploads/news/birajuu0069.jpg', 'Active', '2024-09-23 12:17:54'),
(23, 'uploads/news/O0015.jpg', 'Active', '2024-09-23 12:17:54'),
(24, 'uploads/news/O0019.jpg', 'Active', '2024-09-23 12:17:54'),
(25, 'uploads/news/O0020.jpg', 'Active', '2024-09-23 12:17:54'),
(26, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.19.jpeg', 'Active', '2024-09-23 12:17:54'),
(28, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.34 (1).jpeg', 'Active', '2024-09-23 12:17:54'),
(29, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.37 (1).jpeg', 'Active', '2024-09-23 12:17:54'),
(30, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.43.jpeg', 'Active', '2024-09-23 12:17:54'),
(31, 'uploads/news/birajuu0066.jpg', 'Active', '2024-09-23 12:19:36'),
(32, 'uploads/news/birajuu0070.jpg', 'Active', '2024-09-23 12:19:36'),
(33, 'uploads/news/birajuu0071.jpg', 'Active', '2024-09-23 12:19:36'),
(34, 'uploads/news/WhatsApp Image 2023-08-10 at 13.52.28 (2).jpeg', 'Active', '2024-09-23 12:19:36'),
(35, 'uploads/news/WhatsApp Image 2023-08-10 at 13.52.28.jpeg', 'Active', '2024-09-23 12:19:36'),
(36, 'uploads/news/WhatsApp Image 2023-08-10 at 20.04.49 (1).jpeg', 'Active', '2024-09-23 12:19:36'),
(37, 'uploads/news/WhatsApp Image 2023-08-10 at 20.04.50.jpeg', 'Active', '2024-09-23 12:19:36'),
(38, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.05.jpeg', 'Active', '2024-09-23 12:19:36'),
(39, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.17.jpeg', 'Active', '2024-09-23 12:19:36'),
(40, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.29 (1).jpeg', 'Active', '2024-09-23 12:19:36'),
(41, 'uploads/news/WhatsApp Image 2023-08-10 at 20.05.50.jpeg', 'Active', '2024-09-23 12:19:36'),
(42, 'uploads/news/WhatsApp Image 2023-08-10 at 20.06.08.jpeg', 'Active', '2024-09-23 12:19:36'),
(43, 'uploads/news/WhatsApp Image 2023-08-10 at 21.49.35.jpeg', 'Active', '2024-09-23 12:19:36'),
(44, 'uploads/news/WhatsApp Image 2024-09-06 at 1.50.43 PM (1).jpeg', 'Active', '2024-09-23 12:19:36'),
(45, 'uploads/news/WhatsApp Image 2024-09-06 at 1.50.44 PM (2).jpeg', 'Active', '2024-09-23 12:19:36'),
(46, 'uploads/news/WhatsApp Image 2024-09-06 at 1.50.44 PM.jpeg', 'Active', '2024-09-23 12:19:36'),
(47, 'uploads/news/WhatsApp Image 2024-09-06 at 2.16.56 PM (1).jpeg', 'Active', '2024-09-23 12:19:36'),
(48, 'uploads/news/WhatsApp Image 2024-09-16 at 1.28.31 PM (1).jpeg', 'Active', '2024-09-23 12:19:36'),
(49, 'uploads/news/WhatsApp Image 2024-09-16 at 1.28.31 PM.jpeg', 'Active', '2024-09-23 12:19:36'),
(50, 'uploads/news/WhatsApp Image 2024-09-16 at 1.28.34 PM (1).jpeg', 'Active', '2024-09-23 12:19:36'),
(51, 'uploads/news/WhatsApp Image 2024-09-16 at 1.57.40 PM (2).jpeg', 'Active', '2024-09-23 12:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `our_work`
--

CREATE TABLE `our_work` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `head` text NOT NULL,
  `para` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_work`
--

INSERT INTO `our_work` (`id`, `image`, `head`, `para`, `status`, `creation_on`) VALUES
(3, 'uploads/our_work/WhatsApp Image 2024-09-26 at 2.23.05 PM (1).jpeg', 'Corona head', '<p>Corona paragraph</p>\r\n', 'Active', '2024-09-28 04:40:19'),
(4, 'uploads/our_work/WhatsApp Image 2024-09-06 at 1.54.53 PM (2).jpeg', 'help to animal', '<p>dfhfevsbsdvcgsdfvwehbdcn</p>\r\n', 'Active', '2024-09-28 04:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `message` text DEFAULT NULL,
  `payment_status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_type_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `image`, `image_type_id`, `status`, `creation_on`) VALUES
(1, 'uploads/gallary/WhatsApp Image 2024-09-06 at 1.54.54 PM.jpeg', 1, 'Active', '2024-09-26 09:47:59'),
(2, 'uploads/gallary/WhatsApp Image 2024-09-06 at 1.54.53 PM (1).jpeg', 1, 'Active', '2024-09-26 09:48:32'),
(3, 'uploads/gallary/WhatsApp Image 2024-09-06 at 1.54.55 PM.jpeg', 1, 'Active', '2024-09-26 09:48:43'),
(4, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.23.03 PM (2).jpeg', 3, 'Active', '2024-09-26 10:01:20'),
(8, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.23.17 PM (2).jpeg', 3, 'Active', '2024-09-26 10:03:42'),
(9, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.26.05 PM.jpeg', 2, 'Active', '2024-09-26 10:06:55'),
(10, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.26.17 PM.jpeg', 2, 'Active', '2024-09-26 10:07:08'),
(11, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.30.30 PM.jpeg', 2, 'Active', '2024-09-26 10:07:21'),
(12, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.30.29 PM.jpeg', 2, 'Active', '2024-09-26 10:07:30'),
(13, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.35.02 PM.jpeg', 2, 'Active', '2024-09-26 10:07:39'),
(15, 'uploads/gallary/WhatsApp Image 2024-09-26 at 3.00.28 PM.jpeg', 2, 'Active', '2024-09-26 10:08:28'),
(16, 'uploads/gallary/WhatsApp Image 2024-09-26 at 3.04.45 PM.jpeg', 1, 'Active', '2024-09-26 10:08:56'),
(17, 'uploads/gallary/WhatsApp Image 2024-09-26 at 2.23.05 PM (1).jpeg', 3, 'Active', '2024-09-26 10:28:05'),
(20, 'uploads/gallary/WhatsApp Image 2024-09-06 at 1.57.45 PM (2).jpeg', 3, 'Active', '2024-09-27 09:59:37'),
(21, 'uploads/gallary/WhatsApp Image 2024-09-06 at 2.17.00 PM (1).jpeg', 3, 'Active', '2024-09-27 09:59:48'),
(22, 'uploads/gallary/WhatsApp Image 2024-09-06 at 2.17.02 PM (1).jpeg', 3, 'Active', '2024-09-27 09:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `review` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `review`, `status`, `creation_on`) VALUES
(1, 'John Doe', '<p>This is an amazing service! Highly recommend it to everyone.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum vitae, quis error a quidem sapiente perspiciatis aspernatur ratione laudantium nihil.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum vitae, quis error a quidem sapiente perspiciatis aspernatur ratione laudantium nihil.</p>\r\n', 'Active', '2024-09-19 11:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `test_mode`
--

CREATE TABLE `test_mode` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `razorpay_order_id` varchar(255) NOT NULL,
  `razorpay_payment_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_mode`
--

INSERT INTO `test_mode` (`id`, `name`, `email`, `contact`, `amount`, `razorpay_order_id`, `razorpay_payment_id`, `created_at`, `message`) VALUES
(6, 'Nilesh Londhe', 'mywork.nilesh@gmail.com', '9730030092', 11.00, 'order_PJ85REWTG9mtJl', 'pay_PJ869HVBMDY7Sy', '2024-11-09 13:18:26', 'hi'),
(7, 'katsumi', 'akunstock1331@gmail.com', '7818273929', 50000.00, 'order_PR7xfPciZA9uBP', NULL, '2024-11-29 18:23:06', 'haa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `creation_on`) VALUES
(1, 'admin@gmail.com', '$2a$12$mh126cY5Rf/cP2q9FWM9KO5.aGS03eh8J3soHzy50FfEBaELWOELm', '2024-09-18 06:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `image`, `url`, `status`, `creation_on`) VALUES
(3, 'uploads/video/0.jpg', 'https://www.youtube.com/embed/AETFvQonfV8?si=8ZHLVWgLQj0i2thR', 'Active', '2024-09-20 05:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `vilas_katare`
--

CREATE TABLE `vilas_katare` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `about` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vilas_katare`
--

INSERT INTO `vilas_katare` (`id`, `image`, `name`, `about`, `status`, `creation_on`) VALUES
(1, 'uploads/vilas_katare/Untitled design (5).png', 'VILAS KATARE ', '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse eligendi vero aspernatur nesciunt et. Reprehenderit quod laborum accusantium velit ab, labore architecto aliquam eligendi! Porro consequatur ad nesciunt non animi, quaerat recusandae fugit libero dicta vitae doloribus eveniet ratione unde quo? Odit, nostrum, excepturi ex tempore sint minima fugit fuga placeat sed laudantium hic magni. Quisquam obcaecati, dolore officiis fugit laudantium ex reprehenderit nihil eum incidunt minima ab ad, voluptas quis rerum illum harum, neque quos deserunt distinctio? Quibusdam, deleniti! Unde quo quisquam temporibus voluptatem tempore dolor fugit commodi quos, debitis laboriosam laudantium doloribus exercitationem amet rem aspernatur eum provident nesciunt numquam! Hic incidunt tempora saepe modi magni vero nobis, sunt natus nihil corporis repellat ducimus ab beatae iusto ea ad cum quis quas unde veritatis quae atque nam! Nulla aperiam a, consequatur asperiores id autem praesentium, maiores nesciunt sit repellendus in hic dolorum tempora quo odit dignissimos nihil libero corrupti at quaerat? Repellat dolore assumenda unde quod tempora velit voluptatum sunt ducimus, cumque nam saepe fugiat quaerat atque quis natus quam, excepturi distinctio quasi</p>\r\n', 'Active', '2024-09-20 05:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `creation_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `image`, `name`, `designation`, `status`, `creation_on`) VALUES
(2, 'uploads/volunteer/Untitled design (5).png', 'Vilas Katare', 'Founder & President', 'Active', '2024-09-19 09:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `work_images`
--

CREATE TABLE `work_images` (
  `id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `creation_on` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_images`
--

INSERT INTO `work_images` (`id`, `head_id`, `image`, `creation_on`) VALUES
(1, 3, 'uploads/our_work/WhatsApp Image 2024-09-26 at 2.23.02 PM.jpeg', '2024-09-28 04:40:45'),
(2, 3, 'uploads/our_work/WhatsApp Image 2024-09-26 at 2.23.05 PM (2).jpeg', '2024-09-28 04:42:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_type`
--
ALTER TABLE `image_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milind_sanstha`
--
ALTER TABLE `milind_sanstha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_work`
--
ALTER TABLE `our_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_type_id` (`image_type_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_mode`
--
ALTER TABLE `test_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vilas_katare`
--
ALTER TABLE `vilas_katare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_images`
--
ALTER TABLE `work_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_id` (`head_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `causes`
--
ALTER TABLE `causes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `image_type`
--
ALTER TABLE `image_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `milind_sanstha`
--
ALTER TABLE `milind_sanstha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `our_work`
--
ALTER TABLE `our_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test_mode`
--
ALTER TABLE `test_mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vilas_katare`
--
ALTER TABLE `vilas_katare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_images`
--
ALTER TABLE `work_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`image_type_id`) REFERENCES `image_type` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_images`
--
ALTER TABLE `work_images`
  ADD CONSTRAINT `work_images_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `our_work` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
