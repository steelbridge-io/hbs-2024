// Constructor Pattern for scenario Cards
class solutionCard 
{
    constructor(title, mainText, subText) 
    {
        this.title = title; // The title on top of the solution card
        this.mainText = mainText; // the main text on top half
        this.subText = subText; // the small print at bottom of card
    }
}

// One global variable to serve as a container for my entire app
var MYAPP = {};
var shareTitle = null;

// Enter the text for all the cards...
// EXCEPT cards that clearly don't apply during pandemic: Carpool, Community Table, Commuting Audio Book, Rock to Work, Watering Hole
// Titles first:

/*
var solutionTitles = ['4-6-8 Breath', 'Active Constructive Responding', 'Antioxidant Snack', 'Ask a Favor, Do a Favor', 
                      'Assume Positive Intent', 'Autonomy', 'Batch Your Email', 'Be a Sweetheart', 'Be Here Now', 'Be Outstanding', 
                      'Best Possible Future', 'Bright Side', 'Bust a Yoga Move', 'Call Your Calling', 'Celebrate', 'Choose From Three', 
                      'Collaboration and Delegation', 'Communicate', 'Company', 'Constructive Responding', 'Courage to Fail', 'Courageous Conversation', 
                      'Describe Progress', 
                      'Develop Strengths', 'Don’t Stress About Your Stress', 'Earn Trust', 'Emotional Intelligence', 'Fair Pay', 
                      'Fake it Until You Make It', 'Find the Meaning', 'Flow Indicator', 'Flow', 'Focus on the Positive', 'Forgive', 'Friends at Work', 
                      'Growth Mindset','Half Full','I Did It List','I feel…','Identify the Next Step',
                      'Just the Right Challenge','Learn and Grow','Listen and Respond','Listen to Nature Sounds','Manage Your Messaging',
                      'Mastery Goals', 'Mentoring','Midday Workout', 'Mind Your Pressure', 'Mindfulness', 'Monitor Your Monitors','Name It to Tame it',
                      'No Device Light at Night', 'No Work in Bed!', 'Nurture Hope', 'Outside Information','Team Lightning Talk','Performance Preview',
                      'Plan a Vacation','Play Fair', 'Positive Goals', 'Post Puppy Pics','Power Nap', 'Practice Positivity','Prioritize People',
                      'Prioritize Quality', 'Random Act of Kindness', 'Real, Clear Values','Remind Yourself Why','Remove Roadblocks', 'Ringing Meditation', 
                      'Savor','Say “I don’t” to Bad Habits',
                      'Self-Review', 'Seven a Day', 'SMARTEST Goals', 'Smile', 'Specific Gratitude','Spend on Experiences', 'Spend on People',
                      'Spend On the Future','Start with Recognitions', 'Stop Thinking in Ruts', 'Strength Spotter', 
                      'Stress is Energizing', 'Super You', 'Sure Thing!', 'Take a Break Together', 'Take a Day Off', 'Take Responsibility',
                      'Turn Off Email Alert', 'Use Strengths', 'Visualization Micro-Break', 'Walking Meditation', 'Walking One-on-One', 'We',
                      "What's Working Well", 'When and Where Goals', 'With a Friend', 'Workout at Work'];
*/

// Next, the main text that appears below the title

/*
var solutionMainTexts = [
    'Whenever you need a little rejuvenation, take a big deep breath for four seconds. Hold it for six seconds. Exhale for eight seconds.', 
    'Respond to good news at work by asking questions and giving congratulations.',
    'Eat some berries that are dipped or covered in cholocate, or another snack rich in antioxidents.', 
    'Ask a colleague for a favor, and be willing to do favors for colleagues. Reciprocate!', 
    'Give people the benefit of the doubt and assume that their intentions are good.', 
    'Establish the freedom to determine when, where, and how you will work towards your goals.', 
    'Pick 2 or 3 times of day to check email, and shut it down other times of the day.', 
    'Practice ways of showing kindness to your colleagues. Sometimes small acts of kindness make a big difference.', 
    'Now is all you have. Focus your awareness and thinking on this moment right here, right now.', 
    'Work while standing up sometimes. Even better, work at a treadmill desk if you have that option.', 
    'Write down your best possible future at work for three years from now. ', 
    'Find the positive in almost any situation.', 
    'Whether your pose is cobra, dolphin, and/or downward dog, do at least a bit of yoga.', 
    'Find the meaning in what you do at work.  Consider why you do what you do', 
    'Celebrate your accomplishments and wins.', 
    'When making decisions choose from three or even two options.', 
    'Find ways to collaborate with others on goals and projects or delegate those to collegues if possible.', 
    "Communicate frequently and energetically. If you aren't sure if you need to communicate about a particular is, simply ask!", 
    "Do almost anything with other people instead of alone, even if you're just on the phone.", 
    'Respond to good news by asking questions and responding with enthusiasm!', 
    "Don't just tolerate the mistakes and failures you and your colleagues make, celebrate most of them.", 
    'Have a difficult conversation that needs to be had. Calm yourself and your fears, then be respectful, assertive, and flexible.', 
    'Think of a goal you are working toward. Describe in detail some of the progress you have made toward that goal.', 
    'In reviews and more frequent feedback, encourage the development of under-used strengths. ', 
    'Don’t compound your stress by stressing about your stress!', 
    'Say what you’ll do and do what you say. Meet or exceed expectations Be trustworthy.', 
    'Learn to recognize and label the emotions that you and others are having. Use that knowledge to work more effectively with others.', 
    'If you feel you are not being compensated fairly, gather data, be polite and assertive, and advocate for yourself.', 
    'Smile, sit up straight, and walk with a spring in your step, even if you are acting happier than you feel.', 
    'In discussions at your organization, bring in information from the outside world. ', 
    'When you are focusing to get into flow on a project or task, use a visual indicator like putting up a sign or putting in headphones.', 
    'Focus undistracted on a task that is challenging but possible for 20 minutes or more. Get into the zone!', 
    'Whenever faced with things you can’t change, focus on the positive. ', 
    'Forgive someone who has wronged you at work. Give someone—and yourself—a break. ', 
    'Seek out a friend at work and talk with them about things that are difficult for you.', 
    'Care more about what you learn than proving you are already smart or talented.',
    'In a mixed situation, view it as positively as possible. ', 
    'Write an "I Did It" list to remind yourself of all that you achieved on a particular day.', 
    'Start challenging dialogues with “I feel…”, and then describe how you have been impacted. Constructively confront behavior, not people.', 
    'When facing difficult or unfamiliar challenges, get clear about the next step you need to take toward that goal.',
    'Take on a project that is just at the edge of your ability—not too easy, not too hard.',
    'Focus on learning and growth for you and your colleagues, through classes, conferences, books, and/or job assignments.',
    'Truly focus your attention and listen to those giving you information and input. Respond and let them know you’ve heard them.',
    'To focus on solo work in a noisy environment, play an internet video or other recording of nature sounds, like a river or ocean waves.',
    'Turn off any unessential notifications. Take yourself offline whenever you really want to focus.',
    'Make goals that focus on learning and growth. Write one of your next goals as a mastery goal.', 
    'Find a mentor: someone more experienced or knowledgeable than you who can help guide you to greater success.',
    'Take an exercise break in the middle of your work day. This timing is helpful, giving you more energy for the remainder of your day.', 
    'Know your brain and give yourself the ideal amount of pressure to bring your best.', 
    'Meditation or other forms of mindfulness are about paying complete attention, without judgment, to what’s happening right now.', 
    'Place your computer monitor so that you won’t see distractions such as motion and other people.',
    'Name your unpleasant feelings. Then try to find a new perspective that helps you feel better.',
    'Stop all white lights—devices and more—at least one hour before bedtime.', 
    'Don’t take your phone to bed. Both the white light from phones and the sounds or vibrations can keep us up.', 
    'When discouraged, raise your level of hope by finding abilities that you have, and ways to use those abilities to solve problems.', 
    'In discussions at your organization, bring in information from the outside world. ',
    'Prepare a slideshow of 10 personal images, 10 seconds each. Each group member presents their slideshow.',
    'Everyone writes a draft of their review many months in advance.',
    "Plan and then take a vacation, even if it's a 'staycation'!",
    'To increase fairness get feedback, explain the why behind your decisions, and always consider the good of the group.', 
    "Phrase goals in positive terms. Don't include what you are trying to prevent or avoid, just describe the future you want.", 
    'If you love your pet, post a picture of him or her at the office. Experiment with pictures of favorite pets, people, and places.',
    'Encourage brief 20 minute rests at work, especially in the mid afternoon.', 
    'See the best around you in other people and their work. Try starting your day or your meeting with a few positive comments.',
    'Prioritize people over process, technology, and everything else at work.',
    'How can--or do--you make quality a priority at work? Measure quality, invest in quality, discuss quality, and reward quality.', 
    'Perform a random act of kindness.',
    'Get very clear on corporate values. Go beyond talk and consistently act and decide according to those values.',
    'Think about why you’ve taken an important goal.',
    'Give teams what they need. Provide resources and tools. Find the bottlenecks and roadblocks, and assist.', 
    'When you hear a ring or ding, take one big deep breath, trying to just notice how it feels, without judgment. ', 
    'Truly taste the food you are eating. Notice and hold onto nice moments. Celebrate and appreciate.',
    'Watch your language to help manage your behavior. Say \“I don\’t (bad behavior)\".',
    'Everyone writes the first draft of their own review, for example.', 
    'Provide a healthy array of fruits and vegetables during the workday. Make it easier to consume healthy food than unhealthy food.', 
    'Make goals that are Specific, Measureable, Attainable, Relevant, Timebound, Educational, Significant, and Toward.', 
    'Smile, even if you are faking the smile.', 
    'Think of something specific at work you are grateful for. Tell someone what you appreciate and the impact it had on you.',
    'Spend your money on experiences with other people-even virtual ones-to build great memories and relationships.',
    'Spend money, time, energy, and more on other people and their needs.',
    'Spend on something that will arrive in the future. Bonus points if it’s an event with other people!',
    'Start meetings with recognitions, where anyone can express gratitude to someone else.', 
    'When you notice yourself thinking similar thoughts over and over, stop! ', 
    'Notice when others both perform well and when they get energized. Talk about the strength you see and how it is valuable.', 
    'View stress as energizing. Your pounding heart and breaking into a sweat are preparing you for action!', 
    'Pose like a super hero—hands on hips with elbows out for example—for two minutes or more.', 
    "In uncertain situations, get as much certainty as you can. Focus on what you do know, like <i>where</i>, <i>when</i>, or <i>how</i>.", 
    'Really, don’t work for a few minutes. Get away from wherever you do your work. If possible talk with others.', 
    'Take a day truly off from work: no email, no meetings, no tasks. Do it before you start burning out!', 
    'Take responsibility and do the right thing, acting ethically and authentically. If you made a mistake, act to correct it for all involved.',
    'If your email program notifies you whenever a message arrives, turn it off.', 
    'Discover, develop and use your strengths—those things you are good at and you find energizing—at work.', 
    'Close your eyes and picture a favorite spot, or yourself performing an activity you do really well.', 
    'When walking, try to let thoughts go and simply focus on how your feet feel.', 
    'When meeting with one other person, try going for a walk.', 
    "Think and say ‘we’ instead of ‘I’ or ‘me’ in the vast majority of situations. Certainly in mission and value statements.",
    "Ask positive questions to find what's working well in your organization. Share those best practices with your colleagues.", 
    'When intending to do something new, state when and where you will take the new action.', 
    "Do almost anything with other people instead of alone, even if you're just on the phone together.", 
    "Create whatever workout space you can, even if it's just a resistance band, a pair of handweights, or a spot to do push-ups."];
*/
// Finally, the 'Because...' small text at the bottom of the card

/*
var solutionSubTexts = [
    'slow breathing triggers a relaxation response, helping you manage stress for best brain function.',
    'this is one of the best ways to build quality relationships and happiness at the same time.',
    'snacks can help restore willpower. Also foods high in antioxidants – such as berries and dark chocolate – are especially good for your brain.',
    "doing favors for each other, especially when it's reciprocal, helps build better relationships, which helps fuel happiness.",
    'feeling more compassion boosts your happiness.',
    'autonomy is one of the strongest motivators available. Having autonomy also lessens stress and improves mood.',
    'people that check email at specific times of day experience less stress throughout the day.',
    'being nice to each other is great for relationships, which are great for life-long happiness.',
    'those who focus more on the present are happier than those who spend more time in the past or future.',
    'physical activity boosts blood flow and therefore boosts health, focus and mood.',
    'doing this boosts your optimism, which increases your happiness, which makes this future more likely to come true.',
    'positive attitude simply works to boost your mood. This does not mean denying the hardship, but it does mean also seeing the silver lining.',
    'yoga can provide exercise mindfulness, and flow, all of which are good for thriving at work.',
    'those who view their jobs as a calling are happier and more engaged. what is your purpose? What’s the bigger impact of your work?',
    'being there for each other in good times is a good way to build relationships. Celebrating boosts both mood and relationships.',
    'when we choose from fewer options, we tend to be happier with the choice we make. Prevent excessive choice, which leads to stress and unhappiness.',
    'working together can deepen and improve relationships, and delegation can reduce stress and provide opportunities for others.',
    'the MIT Human Dynamics Lab’s research shows the best teams communicate frequently and energetically. They face each other and gesture, for example.',
    'our relationships are a huge factor in our happiness. Working with others usually boosts our mood and effectiveness.',
    "it's one of the best ways to build quality relationships and happiness at the same time.",
    'failure happens when people are taking action, taking risks, learning, and growing. We can learn the most from our failures. This is key to achieving innovation.',
    'the quality of our relationships has a huge effect on the experience of our working lives.',
    'progress toward clear and meaningful goals fuels happiness and engagement at work.',
    'using and developing strengths boosts energy and engagement at work.',
    'excess stress triggers the fight, flight, or freeze response, which can limit your brain’s ability to find solutions.',
    'trust is a primary driver of engagement.',
    'studies suggest that people with higher emotional intelligence have improved job performance and leadership skills.',
    'while money can’t buy engagement at work, unfair compensation can lead to disengagement.',
    'many studies show that what you do with your face and body affects how you feel.',
    'intrinsic goals bring more motivation and happiness than goals motivated by external factors.',
    'flow fuels happiness and productivity, and you need about 20 minutes of uninterrupted work time to focused to get into flow.',
    'flow produces happiness, and great results, by completely engaging people in their work.',
    'focusing attention on the positive helps minimize the significant of negative emotions. Feed yourself positivity for best brain function.',
    'forgiving when we are ready allows us to move past pain and improve the quality of our relationships, and our well-being.',
    'science strongly suggests that social support is real, effective support. The right colleague can make a big positive difference in how you feel.',
    'a growth mindset–focusing on how you are improving–leads to greater resilience and success.',
    'seeing the glass as half full works to boost your mindset and mood. For example, at the midpoint of a project, focus on how much you have achieved.',
    'progress fuels happiness, and writing an “I Did It” list helps you to visualize and celebrate the progress you have made so far.',
    'disagreements are often less damaging with this approach. Relationships can more easily improve when we start with how we feel.',
    'when we are challenged by new or difficult goals, a lack of clarity on the next step can lead to stagnation.',
    'an ideal level of challenge is likely to lead to flow: being completely absorbed in the work and very happy doing it.',
    'career growth opportunities are consistently a key driver of engagement at work.',
    'feeling that our ideas are being heard and seriously considered at work is a major driver of being engaged.',
    'the nature sounds will drown out more distracting noise around you, making it easier to get into flow. Nature sounds tend to be less distracting than music.',
    'instant notifications can take you out of flow, therefore reducing engagement, productivity, and happiness.',
    'mastery goals are motivating and are resilient to setbacks.',
    'a mentor can share suggestions from a different perspective. You may be able to ask your mentor something that is hard to ask your boss.',
    'being physically active on break can boost mood and performance when you return to work.',
    'some thrive under pressure from deadlines, for example, and others need to relax in order to thrive. Do you know what level of pressure brings out your best?',
    'mindfulness boosts health, focus, self-control, and happiness.',
    'focus leads to flow, which leads to happiness, which leads to productivity.',
    'the parts of the brain that name unpleasant emotions are different from the parts of the brain that feel them. Naming helps ease emotional states.',
    'white light at night signals your brain to not produce melatonin, making it harder to fall asleep.',
    'when we sleep, we learn. We experience less stress. We need to sleep well to think well and be happy.',
    'hope lifts both our mood and our ability to get things done.',
    'in studies by MIT’s Human Dynamics Lab, teams that discussed information from external sources created better ideas and plans.',
    'with only personal images and nothing about work, these presentations build trust. Trust is a foundation of relationships and teamwork.',
    'previewing performance can be highly motivating. Once we describe accomplishments we could make, we are compelled to complete them.',
    'vacations are shown to boost health and productivity in the long run. They typically are pretty good for boosting happiness and lowering stress, too.',
    'we are wired to want fairness. When we get it, we relax and feel more satisfaction.',
    'such goals are more motivating and spur more success. For example, instead of saying “I want to multi-task less”, say “I want to get into flow more.”',
    'studies show that a glance at your furry friend may lower stress and improve performance.',
    'brief naps restore energy, reduce errors, and boost mood.',
    'positivity lifts mood. Teams with high ratios of positive to negative comments have increased productivity.',
    'relationships are a huge factor in our happiness. By prioritizing people first, we gain happiness and better brain function.',
    'feeling that everyone is committed to doing quality work is a key driver of engagement. It leads to pride and satisfaction at work.',
    'being kind boosts your mood.',
    'when values are clear, decisions are easier and more likely to be helpful. Values can add meaning to work.',
    'thinking about the reasons behind a goal makes it more meaningful, helping motivate you to achieve that goal.',
    'progress toward meaningful goals is a key source of engagement at work. If the roadblocks were easy to remove, they wouldn’t be roadblocks. Get or provide help.',
    'mindfulness boosts focus, self-control, health, and happiness.',    
    'savoring of the past, present, and future is shown to boost happiness.',
    'saying “I can’t” before a bad habit seems to invite “Yes you can” thinking. Saying “I don’t smoke”, for example, is more effective in preventing bad behavior.',
    'feedback is often challenging. Status issues can make you feel guarded before a word is said. Giving yourself feedback may be more effective.',
    'studies show a causal connection; eating fruits and vegetables–up to 7 servings a day–makes us happier as well as healthier.',
    'SMARTEST goals are even more motivating. Make goals Educational to describe what you can learn, Significant so you care, and Toward to align with what you want.',
    'smiling triggers, the brain to feel happier. It might feel silly at first, but for most of us, most of the time, it works.',
    'gratitude simply and powerfully affects happiness.',
    "research shows that money can make us happy if it’s spent well. Spending on experiences tends to bring happiness before, during, and after the event.",
    'spending on others boosts mood and relationships.',
    'money can make us happy, but only if we spend it correctly. Spending on the future boosts our mood with anticipation.',
    'recognitions create a high ratio of positive to negative comments. That leads to happier brains doing better work.',
    'perseverating and thinking in ruts leads to unhappiness. Instead, get to the root of the issue, replace the thought with another, and/or talk with a friend.',
    'appreciating and validating other people feels good. Using strengths boosts happiness and engagement.',
    'in a Harvard study, those who viewed stress as helpful experienced less ill health effects from their stress.',
    'research shows this stance helps us feel more calm and assertive.',
    'brains crave certainty. When the world behaves as the brain expects it to, we feel better. Surprises often cause stress.',
    'breaks relax and re-energize us, allowing us to bring our best. Breaks are productivity enhancers! The best ones get us physical activity and real social contact.',
    'all of us–especially those most engaged at work–need true down time to be more effective.',
    'acting with integrity prevents problems and helps us feel good about our work. Taking responsibility helps us retain our power and ability to improve situations.',
    'email can be compelling and distracting. Turning off notifications lets you focus.',
    'teams that use their strengths are more energetic, more productive, and have lower turnover. Strengths assessments and training can help reap these benefits.',
    'visualizations trigger relaxation and reduces stress, helping many of us get into a better space to do our best work.',
    'in studies, meditation is linked with better self-control, health, success, management, and happiness.',
    'you will think more clearly, remember more of the meeting, ease stress, and boost happiness.',
    'you are all literally in it together. Acting that way boosts mindset, motivation, and relationships.',
    'when you find what’s already working well, you aren’t speculating; you are finding what really works for your people. Good ideas can be spread around.',
    'deciding in advance when and where you will do something sets you up to follow through. The time and location cue the behavior. This helps form new habits.',
    'our relationships are a huge factor in our happiness. Working with others usually boosts our mood and effectiveness.',
    'exercise boosts health, brain function and mood–and dedicated space makes exercise more likely to happen.'
    ];
*/

var scenarioMainTexts = ['Scenario text 1', 'Scenario text 2', 'Scenario text 3'];
var scenarioSubTexts = ['Scenario Sub text 1', 'Scenario Sub text 2', 'Scenario Sub text 3'];
 
var solutionCards = [];

for (var index in solutionTitles)
    solutionCards.push(new solutionCard(solutionTitles[index], solutionMainTexts[index], solutionSubTexts[index]));

var cardWidth = 204;
var cardHeight = 300;
/* On screens that are 992px or less, double the size of the card (which gets shrunk by phones converting 2 pixels to 1)  */
//fixResponsiveness();

dealCards(); // Deal out however many cards we are going to show
generateSharingLinks(); // Generate personalized sharing hrefs for social medias

// Load image files for card backgrounds
// Commenting out card backs for now, simply showing random solution
// var scenarioCardBackImage = document.createElement("IMG");
// scenarioCardBackImage.setAttribute("src", "ScenarioCardBack.png");
// scenarioCardBackImage.setAttribute("width", "185");
// scenarioCardBackImage.setAttribute("height", "258");
// scenarioCardBackImage.setAttribute("alt", "Solution card");
// document.body.appendChild(scenarioCardBackImage);

function dealCards() 
{
    // change the text of our single solution card
    // start by getting a random index for a new random solution set of texts
    var randomIndex = Math.floor(Math.random() * solutionCards.length);
    
    document.getElementById("titleText").innerHTML = '<b>' + solutionCards[randomIndex].title + '</b>';
    shareTitle = solutionCards[randomIndex].title;
    document.getElementById("mainText").innerHTML = solutionCards[randomIndex].mainText;
    document.getElementById("subText").innerHTML = 'Because ' + solutionCards[randomIndex].subText;
}   
  
function fixResponsiveness() {
    if (window.matchMedia("(max-width: 992px)").matches) {
        /* The viewport is less than, or equal to, 992 pixels wide */
        console.log ("Under 992 px screen");

        var myContainer = document.getElementById("soloSolutionCard"); // get the picture of the card (blank background)
        myContainer.classList.remove("container");
        myContainer.classList.add("containerMobile"); // Switch to the mobile container with it's width for wrapping text, etc.

        var myCardImage = document.getElementById("cardImage"); // get the picture of the card (blank background)
        myCardImage.width=408;  // double the width
        myCardImage.height=600; // double the height

        var myCardTitleText = document.getElementById("titleText");
        myCardTitleText.classList.remove("titleText");      // Remove desktop class (size, position) of main text
        myCardTitleText.classList.add("titleTextMobile");   // Switch to the mobile class (size, position) of main text

        var myCardMainText = document.getElementById("mainText");
        myCardMainText.classList.remove("mainText");      // Remove desktop class (size, position) of main text
        myCardMainText.classList.add("mainTextMobile");   // Switch to the mobile class (size, position) of main text

        var myCardSubText = document.getElementById("subText");
        myCardSubText.classList.remove("subText");      // Remove desktop class (size, position) of main text
        myCardSubText.classList.add("subTextMobile");   // Switch to the mobile class (size, position) of main text
    } 
}

function generateSharingLinks() {
    document.getElementById("twitter-share").href = "https://twitter.com/intent/tweet?url=https://www.happybrainscience.com/daily-happiness-boost/&text=I got the '" + shareTitle + "' card!";
    document.getElementById("email-share").href = "mailto:?subject=Daily%20Happiness%20Boost&body=I%20thought%20you%20might%20like%20a%20random%20happiness%20boost!%20I%20got%20the%20'" + shareTitle + "'%20card!" + "%20https://www.happybrainscience.com/daily-happiness-boost/";
    document.getElementById("linkedin-share").href = "https://www.linkedin.com/shareArticle?mini=true&url=https://www.happybrainscience.com/daily-happiness-boost/&title=I got the '" + shareTitle + "' card!";
}