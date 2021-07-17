<?php
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'couldn\'t connect to server'.mysqli_error($con);
        exit();
    }

    //Aptitude_easy questions
    $q1 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","Two trains running in opposite directions cross a man 
    standing on the platform in 27 seconds and 17 seconds respectively and they cross each other in 23 seconds. The ratio of their speeds is:","1 : 3","3 : 2",
    "3 : 4","None of these","B",1)';
    $res1 = mysqli_query($con,$q1);
    
    $q2 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","From a point P on a level ground, the angle of elevation
     of the top tower is 30°. If the tower is 100 m high, the distance of point P from the foot of the tower is:","149 m","156 m","173 m","200 m","C",1)';
    $res2 = mysqli_query($con,$q2);
    
    $q3 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","A sum fetched a total simple interest of Rs. 4016.25 
    at the rate of 9 p.c.p.a. in 5 years. What is the sum?","Rs. 4462.50","Rs. 8032.50","Rs. 8900","Rs. 8925","D",1)';
    $res3 = mysqli_query($con,$q3);

    $q4 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","What was the day of the week on 17th June, 1998?",
    "Monday","Tuesday","Wednesday","Thursday","C",1)';
    $res4 = mysqli_query($con,$q4);

    $q5 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","66 cubic centimetres of silver is drawn into a wire 
    1 mm in diameter. The length of the wire in metres will be:","84","90","168","336","A",1)';
    $res5 = mysqli_query($con,$q5);

    $q6 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","Let N be the greatest number that will divide 1305, 
    4665 and 6905, leaving the same remainder in each case. Then sum of the digits in N is:","4","5","6","8","A",1)';
    $res6 = mysqli_query($con,$q6);

    $q7 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","A boat running upstream takes 8 hours 48 minutes to 
    cover a certain distance, while it takes 4 hours to cover the same distance running downstream. What is the ratio between the speed of the boat and speed of the 
    water current respectively?","2 : 1","3 : 2","8 : 3","None of these","C",1)';
    $res7 = mysqli_query($con,$q7);

    $q8 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","If a person walks at 14 km/hr instead of 10 km/hr, 
    he would have walked 20 km more. The actual distance travelled by him is:","50 km","56 km","70 km","80 km","A",1)';
    $res8 = mysqli_query($con,$q8);

    $q9 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","The banker\'s gain on a sum due 3 years hence at 
    12% per annum is Rs. 270. The banker\'s discount is:","Rs. 960","Rs. 840","Rs. 1020","Rs. 760","C",1)';
    $res9 = mysqli_query($con,$q9);

    $q10 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","Two pipes A and B can fill a cistern in 37.5 
    minutes and 45 minutes respectively. Both pipes are opened. The cistern will be filled in just half an hour, if the B is turned off after:","5 min","9 min",
    "10 min","15 min","B",1)';
    $res10 = mysqli_query($con,$q10);

    $q11 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","A, B, C subscribe Rs. 50,000 for a business. 
    A subscribes Rs. 4000 more than B and B Rs. 5000 more than C. Out of a total profit of Rs. 35,000, A receives:","Rs. 8400","Rs. 11,900","Rs. 13,600","Rs. 14,700",
    "B",1)';
    $res11 = mysqli_query($con,$q11);

    $q12 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","Out of 7 consonants and 4 vowels, how many words of 
    3 consonants and 2 vowels can be formed?","210","1050","25200","21400","C",1)';
    $res12 = mysqli_query($con,$q12);

    $q13 = 'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) VALUES("aptitude","In a 100 m race, A beats B by 10 m and C by 13 m. In 
    a race of 180 m, B will beat C by:","5.4 m","4.5 m","5 m","6 m","D",1)';
    $res13 = mysqli_query($con,$q13);

    //Aptitude medium questions
    $q14=  'INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) 
            VALUES("aptitude","Seats for Mathematics, Physics and Biology in a school are in the ratio 5 : 7 : 8. There is a proposal to increase these seats by 40%, 50% and 75% respectively. What will be the ratio of increased seats?",
            "2 : 3 : 4","6 : 7 : 8","6 : 8 : 9","None of these","A",2),
            ("aptitude","In how many different ways can the letters of the word \'CORPORATION\' be arranged so that the vowels always come together?",
            "810","1440","2880","50400","D",2),
            ("aptitude","Today is Monday. After 61 days, it will be:","Wednesday","Saturday","Tuesday","Thursday","B",2),
            ("aptitude","The least perfect square, which is divisible by each of 21, 36 and 66 is:","213444","214344","214434","231444","A",2),
            ("aptitude","Mr. Thomas invested an amount of Rs. 13,900 divided in two different schemes A and B at the simple interest rate of 14% p.a. and 11% p.a. respectively. If the total amount of simple interest earned in 2 years be Rs. 3508, what was the amount invested in Scheme B?",
            "Rs. 6400","Rs. 6500","Rs. 7200","Rs. 7500","A",2),
            ("aptitude","A hall is 15 m long and 12 m broad. If the sum of the areas of the floor and the ceiling is equal to the sum of the areas of four walls, the volume of the hall is:",
            "720","900","1200","1800","C",2),
            ("aptitude","Six bells commence tolling together and toll at intervals of 2, 4, 6, 8 10 and 12 seconds respectively. In 30 minutes, how many times do they toll together ?",
            "4","10","15","16","D",2),
            ("aptitude","Find the odd one out: 396, 462, 572, 427, 671, 264","396","427","671","264","B",2),
            ("aptitude","There are two examinations rooms A and B. If 10 students are sent from A to B, then the number of students in each room is the same. If 20 candidates are sent from B to A, then the number of students in A is double the number of students in B. The number of students in room A is:",
            "20","80","100","200","C",2),
            ("aptitude","How many of the following numbers are divisible by 132 ? 264, 396, 462, 792, 968, 2178, 5184, 6336","4","5","6","7","A",2),
            ("aptitude","1397 x 1397 = ?","1951609","1981709","18362619","2031719","A",2),
            ("aptitude","A fruit seller had some apples. He sells 40% apples and still has 420 apples. Originally, he had:","588 apples","600 apples","672 apples","700 apples","D",2),
            ("aptitude","What percentage of numbers from 1 to 70 have 1 or 9 in the unit\'s digit?","1","14","20","21","C",2)';
    $res14=mysqli_query($con,$q14);

    //Aptitude hard questions
    $q15='INSERT INTO QUESTION(domain,question,opt_a,opt_b,opt_c,opt_d,crct_ans,difficulty) 
    VALUES("aptitude","If A = x% of y and B = y% of x, then which of the following is true?",
    "A is smaller than B","A is larger than B","If x is smaller than y, then A is greater than B","None of these","D",3),
    ("aptitude","If 2994 ÷ 14.5 = 172, then 29.94 ÷ 1.45 = ?","0.172","1.72","17.2","172","C",3),
    ("aptitude","A man purchased a cow for Rs. 3000 and sold it the same day for Rs. 3600, allowing the buyer a credit of 2 years. If the rate of interest be 10% per annum, then the man has a gain of:",
    "0%","5%","7.5%","10%","A",3),
    ("aptitude","A trader owes a merchant Rs. 10,028 due 1 year hence. The trader wants to settle the account after 3 months. If the rate of interest 12% per annum, how much cash should he pay?",
    "Rs. 9025.20","Rs. 9200","Rs. 9600","Rs. 9560","B",3),
    ("aptitude","Insert the missing number: 16, 33, 65, 131, 261, (....)","523","521","613","721","A",3),
    ("aptitude","In a certain store, the profit is 320% of the cost. If the cost increases by 25% but the selling price remains constant, approximately what percentage of the selling price is the profit?",
    "30%","70%","100%","250%","B",3),
    ("aptitude","In how many ways can a group of 5 men and 2 women be made out of a total of 7 men and 3 women?","63","90","126","45","A",3),
    ("aptitude","The difference between simple and compound interests compounded annually on a certain sum of money for 2 years at 4% per annum is Re. 1. The sum (in Rs.) is:",
    "625","630","640","650","A",3),
    ("aptitude","Tea worth Rs. 126 per kg and Rs. 135 per kg are mixed with a third variety in the ratio 1 : 1 : 2. If the mixture is worth Rs. 153 per kg, the price of the third variety per kg will be:",
    "Rs. 169.50","Rs. 170","Rs. 175.50","Rs. 180","C",3),
    ("aptitude","A milk vendor has 2 cans of milk. The first contains 25% water and the rest milk. The second contains 50% water. How much milk should he mix from each of the containers so as to get 12 litres of milk such that the ratio of water to milk is 3 : 5?",
    "4 litres, 8 litres","6 litres, 6 litres","5 litres, 7 litres","7 litres, 5 litres","B",3),
    ("aptitude","Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?",
    "9","10","12","20","B",3),
    ("aptitude","A, B and C can do a piece of work in 20, 30 and 60 days respectively. In how many days can A do the work if he is assisted by B and C on every third day?",
    "12 days","15 days","16 days","18 days","B",3),
    ("aptitude","How many times in a day, the hands of a clock are straight?","22","24","44","48","C",3),
    ("aptitude","The length of a rectangular plot is 20 metres more than its breadth. If the cost of fencing the plot at 26.50 per metre is Rs. 5300, what is the length of the plot in metres?",
    "40","50","120","None of these","D",3)';

    $res15=mysqli_query($con,$q15);
    mysqli_close($con);
?>