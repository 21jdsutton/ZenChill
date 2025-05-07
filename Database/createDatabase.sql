CREATE DATABASE ZenChill;
CHAR SET utf8;
USE ZenChill;

CREATE TABLE USERS (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

CREATE TABLE SUBSCRIPTIONS (
  subscription_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  subscription_tier VARCHAR(50),
  price DECIMAL(5,2),
  FOREIGN KEY (user_id) REFERENCES USERS(user_id)
);

CREATE TABLE PAYMENT_METHOD (
  payment_id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  card_number VARCHAR(20),
  card_name VARCHAR(100),
  billing_address VARCHAR(255),
  zip_code VARCHAR(10),
  FOREIGN KEY (user_id) REFERENCES USERS(user_id)
);

CREATE TABLE MOVIES (
  movie_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255),
  description TEXT,
  genre VARCHAR(50),
  release_year INT,
  duration INT,
  thumbnail VARCHAR(255)
);


INSERT INTO Users (name, email, password) VALUES
('James Sutton', 'suttonjd95@gmail.com', 'A904167b'),
('Max Holloway', 'max@ZenChill.com', 'river73'),
('Ava Kimura', 'ava@ZenChill.com', 'storm92'),
('Liam Takeda', 'liam@ZenChill.com', 'shadow17'),
('Sophia Watanabe', 'sophia@ZenChill.com', 'echo48'),
('Noah Ishikawa', 'noah@ZenChill.com', 'nova55'),
('Emma Hayashi', 'emma@ZenChill.com', 'skye66'),
('Oliver Mori', 'oliver@ZenChill.com', 'flare19'),
('Mia Tanaka', 'mia@ZenChill.com', 'lunar31'),
('Elijah Nakamura', 'elijah@ZenChill.com', 'venom88'),
('Isabella Sato', 'isabella@ZenChill.com', 'rune42'),
('Lucas Akiyama', 'lucas@ZenChill.com', 'zephyr26'),
('Amelia Fujimoto', 'amelia@ZenChill.com', 'ember90'),
('James Yamamoto', 'james@ZenChill.com', 'glitch38'),
('Charlotte Inoue', 'charlotte@ZenChill.com', 'mist07'),
('Benjamin Kojima', 'benjamin@ZenChill.com', 'pulse81'),
('Harper Matsuda', 'harper@ZenChill.com', 'frost63'),
('Henry Okabe', 'henry@ZenChill.com', 'spark94'),
('Evelyn Tsukino', 'evelyn@ZenChill.com', 'dash52'),
('Alexander Arata', 'alexander@ZenChill.com', 'quake11');

INSERT INTO SUBSCRIPTIONS (user_id, subscription_tier, price) VALUES
(1, 'Inferno', 19.99),      -- James Sutton
(2, 'Obsidian', 9.99),      -- Max Holloway
(3, 'Crimson', 5.99),       -- Ava Kimura
(4, 'Free', 0.00),          -- Liam Takeda
(5, 'Inferno', 19.99),      -- Sophia Watanabe
(6, 'Obsidian', 9.99),      -- Noah Ishikawa
(7, 'Crimson', 5.99),       -- Emma Hayashi
(8, 'Free', 0.00),          -- Oliver Mori
(9, 'Obsidian', 9.99),      -- Mia Tanaka
(10, 'Inferno', 19.99),     -- Elijah Nakamura
(11, 'Free', 0.00),         -- Isabella Sato
(12, 'Crimson', 5.99),      -- Lucas Akiyama
(13, 'Inferno', 19.99),     -- Amelia Fujimoto
(14, 'Free', 0.00),         -- James Yamamoto
(15, 'Obsidian', 9.99),     -- Charlotte Inoue
(16, 'Inferno', 19.99),     -- Benjamin Kojima
(17, 'Crimson', 5.99),      -- Harper Matsuda
(18, 'Free', 0.00),         -- Henry Okabe
(19, 'Obsidian', 9.99),     -- Evelyn Tsukino
(20, 'Inferno', 19.99);     -- Alexander Arata

INSERT INTO PAYMENT_METHOD (user_id, card_number, card_name, billing_address, zip_code) VALUES
(1, '4111111111111111', 'James Sutton', '123 Zen Street', '90001'),
(2, '4222222222222222', 'Max Holloway', '456 Chill Ave', '90002'),
(3, '4333333333333333', 'Ava Kimura', '789 Vibe Blvd', '90003'),
(4, '4444444444444444', 'Liam Takeda', '321 Calm Lane', '90004'),
(5, '4555555555555555', 'Sophia Watanabe', '654 Zen St', '90005'),
(6, '4666666666666666', 'Noah Ishikawa', '987 Chill Rd', '90006'),
(7, '4777777777777777', 'Emma Hayashi', '159 Zen Blvd', '90007'),
(8, '4888888888888888', 'Oliver Mori', '753 Calm Street', '90008'),
(9, '4999999999999999', 'Mia Tanaka', '951 Relax Ct', '90009'),
(10, '4000000000000000', 'Elijah Nakamura', '357 Vibe Dr', '90010'),
(11, '4011111111111111', 'Isabella Sato', '654 Chill Pl', '90011'),
(12, '4022222222222222', 'Lucas Akiyama', '852 Calmway', '90012'),
(13, '4033333333333333', 'Amelia Fujimoto', '159 Serene Way', '90013'),
(14, '4044444444444444', 'James Yamamoto', '357 Peace Rd', '90014'),
(15, '4055555555555555', 'Charlotte Inoue', '951 Zen Cir', '90015'),
(16, '4066666666666666', 'Benjamin Kojima', '753 Tranquil Ln', '90016'),
(17, '4077777777777777', 'Harper Matsuda', '654 Calm Ave', '90017'),
(18, '4088888888888888', 'Henry Okabe', '852 Peace Pl', '90018'),
(19, '4099999999999999', 'Evelyn Tsukino', '951 Chill Ct', '90019'),
(20, '4100000000000000', 'Alexander Arata', '753 Vibe Blvd', '90020');

INSERT INTO MOVIES (title, description, genre, release_year, duration, thumbnail) VALUES

('The Minecraft Movie', 'A mysterious portal pulls four misfits into the Overworld, a bizarre, cubic wonderland that thrives on imagination. To get back home, they''ll have to master the terrain while embarking on a magical quest with an unexpected crafter named Steve.', 'Family', 2025, 101, 'images/thumbnails/MinecraftMovie.jpg'),

('Hurricane Bianca', 'A teacher from New York moves to a small town in Texas and is quickly fired for being gay. He soon returns dressed as a mean lady to get revenge on the nasty townspeople.', 'Comedy', 2016, 86, 'images/thumbnails/Hurricane_Bianca.jpg'),

('Saw X', 'Hoping for a miraculous cure, John Kramer travels to Mexico for a risky and experimental medical procedure, only to discover the entire operation is a scam to defraud the most vulnerable. Armed with a newfound purpose, the infamous serial killer uses deranged and ingenious traps to turn the tables on the con artists.', 'Horror', 2023, 118, 'images/thumbnails/SawX.jpg'),

('iRobot', 'In 2035, highly intelligent robots fill public service positions throughout the world, operating under three rules to keep humans safe. Despite his dark history with robotics, Detective Del Spooner (Will Smith) investigates the alleged suicide of U.S. Robotics founder Alfred Lanning (James Cromwell) and believes that a human-like robot (Alan Tudyk) murdered him. With the help of a robot expert (Bridget Moynahan), Spooner discovers a conspiracy that may enslave the human race.', 'Action', 2004, 115, 'images/thumbnails/iRobot.jpg'),

('The Substance', 'Fading actress Elisabeth Sparkle becomes distressed when her chauvinistic boss fires her from her aerobics show. She soon injects herself with a mysterious serum that promises a younger, better version of herself, but things go horribly wrong.', 'Horror', 2024, 140, 'images/thumbnails/TheSubstance.jpg'),

('The Gorge', 'Two highly-trained operatives are appointed to posts in guard towers on opposite sides of a vast and highly classified gorge, protecting the world from a mysterious evil that lurks within. They work together to keep the secret in the gorge.', 'Action', 2025, 127, 'images/thumbnails/The_Gorge.jpg'),

('I Am Legend', 'Robert Neville, a scientist, is a survivor of a man-made plague that transforms humans into mutants; he wanders alone through New York City, calling out for other possible survivors, and works on finding a cure for the plague using his own immune blood; Neville knows he is badly outnumbered and the odds are against him; the infected wait for him to make a mistake that will deliver Neville into their hands.', 'Action', 2007, 100, 'images/thumbnails/I_Am_Legend.jpg'),

('The Prodigy', 'Sarah and John Blume are thrilled when their young son Miles starts to show signs of rapid development and extreme intelligence. Their family bliss soon turns into a living nightmare when Miles'' behavior becomes increasingly erratic and violent by his eighth birthday. After seeking help from two experts, Sarah is horrified to learn that her beloved prodigy may be under the grip of a dark and supernatural force.', 'Horror', 2019, 100, 'images/thumbnails/The_Prodigy.jpg'),

('Juno', 'When precocious teen Juno MacGuff becomes pregnant, she chooses a failed rock star and his wife to adopt her unborn child. Complications occur when Mark, the prospective father, begins viewing Juno as more than just the mother of his future child, putting both his marriage and the adoption in jeopardy.', 'Comedy', 2007, 96, 'images/thumbnails/Juno.jpg'),

('The Handmaid''s Tale', 'Based on the best-selling novel by Margaret Atwood, this series is set in Gilead, a totalitarian society in what used to be part of the United States. Gilead is ruled by a fundamentalist regime that treats women as property of the state, and is faced with environmental disasters and a plummeting birth rate. In a desperate attempt to repopulate a devastated world, the few remaining fertile women are forced into sexual servitude. One of these women, Offred, is determined to survive the terrifying world she lives in, and find the daughter that was taken from her.', 'Drama', 2017, NULL, 'images/thumbnails/handmaids_tale.jpg'),

('Grey''s Anatomy', 'The medical drama series focuses on a group of young doctors at Seattle Grace Mercy West Hospital, who began their careers at the facility as interns. One of the young doctors and the show''s namesake, Meredith Grey, is the daughter of a famous surgeon. Grey struggles to maintain relationships with her colleagues, particularly the hospital''s one-time chief of surgery, Richard Webber, due to a pre-existing relationship between them - Webber and Meredith''s mother had a personal relationship when Meredith was young.', 'Drama', 2005, NULL, 'images/thumbnails/Greys_Anatomy.jpg'),

('The Rookie', 'Starting over isn''t easy, especially for small-town guy John Nolan, who, after a life-altering incident, is pursuing his dream of becoming an LAPD officer. As the force''s oldest rookie, he''s met with skepticism from some higher-ups who see him as just a walking midlife crisis. If he can''t keep up with the young cops and the criminals, he''ll be risking lives -- including his own -- but if he can use his life experience, determination and sense of humour to give him an edge, he may just become successful in this new chapter of his life.', 'Drama', 2018, NULL, 'images/thumbnails/The_Rookie.jpg'),

('This Is Us', 'Jack and his wife - who is very pregnant with triplets - have just moved into their new home in Pittsburgh. Successful and handsome television actor Kevin is growing increasingly bored with his bachelor lifestyle. Randall - who was abandoned at a fire station by his father as an infant - is a stylish New York-based businessman working to raise two daughters with his wife, Beth. These people are among a group, several of whom share a birthday, of seemingly random individuals whose lives intertwine in unexpected ways.', 'Drama', 2016, NULL, 'images/thumbnails/This_Is_Us.jpg'),

('Revenge', 'Wealth, beauty and status define the people who live in the Hamptons. But one woman seeking revenge could destroy it all. Emily Thorne lived in the Hamptons until an incident ruined her family and their reputation, forcing them out of town. Years later, she has returned to her old neighborhood, blending in with the citizens and making friends, not letting on that she has lived there before. In an effort to right some of the past wrongs, she plans vengeance on those who wronged her and her family -- and she doesn''t care at what cost.', 'Drama', 2011, NULL, 'images/thumbnails/Revenge.jpg'),

('Criminal Minds', 'An elite squad of FBI profilers analyzes the country''s most-twisted criminal minds, anticipating the perpetrators'' next moves before they can strike again. Each member of the "mind hunter" team brings his or her expertise to pinpoint predators'' motivations and identify emotional triggers to stop them. The core group includes an official profiler who is highly skilled at getting into the minds of criminals, a quirky genius, the former media liaison who manages to adeptly balance family life and the job, and a computer wizard.', 'Drama', 2005, NULL, 'images/thumbnails/Criminal_Minds.jpg'),

('Riverdale', 'Archie Andrews starts the school year with the world weighing on his shoulders. He''s decided he wants to pursue a future in the music business, but his recently ended clandestine relationship with the music teacher has left him without a mentor, and his friendship with Jughead Jones is in a bad place. Things look like they might be turning around when Veronica Lodge, a new girl, arrives. Despite the instant chemistry, Veronica is hesitant to risk a friendship with Betty -- who has a crush on Archie -- to pursue anything. Amidst all the small-town banality lurks a mystery: the recent tragic death of Jason Blossom, the twin brother of beautiful and popular troublemaker, Cheryl.', 'Drama', 2017, NULL, 'images/thumbnails/Riverdale.jpg'),

('Hannibal', 'Gifted criminal profiler Will Graham has a unique way of thinking that allows him to empathize with anyone, including psychopaths. But while helping the FBI pursue a particularly complicated serial killer, he decides he could use some help and enlists the brilliant psychiatrist Hannibal Lecter. The two form a partnership and it seems that there is no villain they can''t catch together, but Lecter harbors a dark secret. His own brilliant mind has gone to the dark side and he has more in common with the criminals they hunt than Will could possibly imagine.', 'Horror', 2013, NULL, 'images/thumbnails/Hannibal.jpg'),

('Ghosts', 'Samantha, a cheerful freelance journalist, and Jay, an up-and-coming city chef, throw caution—and money—to the wind when they decide to convert a run-down country estate they inherited into a bed and breakfast. However, they soon discover it''s inhabited by the spirits of its former residents. The departed souls form a close-knit, eclectic group, including a saucy Prohibition-era lounge singer, a pompous 1700s militiaman, a 60s hippie fond of hallucinogens, and an overly upbeat 80s scout troop leader. While the spirits are initially anxious about the commotion caused by the renovation and B&B plans, they''re even more shocked when they realize Samantha is the first living person who can see and hear them.', 'Fantasy', 2021, NULL, 'images/thumbnails/Ghosts.jpg'),

('Schitts Creek', 'In the sitcom "Schitts Creek," a wealthy couple video store magnate Johnny and his soap opera star wife Moira suddenly find themselves completely broke. With only one remaining asset, a small town called Schitts Creek, which the Roses bought years earlier as a joke, this once-wealthy couple must give up life as they know it. With their two spoiled children in tow and their pampered lives behind them, the Rose family is forced to face their newfound poverty head-on and come together as a family to survive.', 'Comedy', 2015, NULL, 'images/thumbnails/Schitts_Creek.jpg'),


('Barbie Movie', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', 'Comedy', 2023, 114, 'images/thumbnails/Barbie_Movie.jpg'),

('Supernatural', 'This haunting series follows the thrilling yet terrifying journeys of Sam and Dean Winchester, two brothers who face an increasingly sinister landscape as they hunt monsters. After losing their mother to a supernatural force, the brothers were raised by their father as soldiers who track mysterious and demonic creatures. Violent memories and relationship-threatening secrets add additional burdens on Sam and Dean as they investigate all things that go bump in the night. As old tricks and tools are rendered useless and friends betray them, the brothers must rely on each other as they encounter new enemies.', 'Drama', 2005, NULL, 'images/thumbnails/Supernatural.jpg'),

('The Good Doctor', 'The Good Doctor is an American medical drama television series, a remake of the 2013 South Korean series of the same name, which aired on ABC from September 25, 2017, to May 21, 2024, lasting seven seasons and 126 episodes.', 'Drama', 2017, NULL, 'images/thumbnails/The_Good_Doctor.jpg'),


('Final Destination', 'Alex Browning is embarking on a trip to Paris. Alex experiences a premonition that he sees the plane explode moments after leaving the ground. Alex insists that everyone get off the plane and 7 people, including Alex, are forced to disembark. All watch as the plane actually explodes in a fireball. He and the other survivors have briefly cheated death, but will not be able to evade their fate for very long. One by one, these fugitives from fate fall victim to the grim reaper.', 'Horror', 2000, 98, 'images/thumbnails/Final_Destination.jpg'),

('Final Destination: You Cant Cheat Death Twice', 'Kimberly has a premonition of a horrible highway accident killing multiple people, including her and her friends. She blocks the cars behind her on the ramp from joining traffic, and as a police trooper arrives, the accident actually happens. Now, Death is stalking this group of mistaken survivors, and one by one they are dying as they were supposed to on the highway.', 'Horror', 2003, 100, 'images/thumbnails/Final_Destination2.jpg'),

('Final Destination: Final Destination', 'Six years after a group of high-school students first cheated death, another teen has a premonition that she and her friends will be involved in a horrifying roller-coaster accident. When the vision proves true, the student and her fellow survivors must deal with the repercussions of cheating the Grim Reaper.', 'Horror', 2006, 82, 'images/thumbnails/Final_Destination3.jpg'),

('Final Destination: The Final Destination', 'While enjoying a day at the track, Nick O\'Bannon has a horrific premonition of his friends and him all dying in a freak accident involving many racecars. Mere seconds before the vision comes true, he manages to convince them to leave. Although they cheat death then, the survivors each begin to meet a grisly end, and Nick tries to figure a way to escape a similar fate.', 'Horror', 2009, 82, 'images/thumbnails/Final_Destination4.jpg'),

('Final Destination 5', 'During a bus ride with his colleagues to a corporate retreat, Sam experiences a horrifying vision: the suspension bridge that they, and many others, are crossing starts to crumble around them. When his vision ends and almost immediately starts to come true, Sam takes quick action that saves a number of people, including his girlfriend, Molly, and his best friend, Peter. However, the survivors soon find that Death will not be denied.', 'Horror', 2011, 92, 'images/thumbnails/Final_Destination5.jpg'),

('Attack on Titan', 'Set in a world where humanity is forced to live in cities surrounded by three enormous walls that protect them from gigantic man-eating humanoids referred to as Titans.', 'Animation', 2013, NULL, 'images/thumbnails/Attack_On_Titan.jpg');