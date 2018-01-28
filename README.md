# capstone

In this project, I aimed towards developing a smart, dynamic and efficient automated crop management system that would ensure less human interaction with the crops specifically in terms of watering the plants and identifying the healthiness of the crop. 

Additionally the project includes visualization of the watering trends and analysis based on it. 

The proposed system is an integrated system that combines the mathematical approach to the hardware component. The system is basically divided into three modules. 
1. The first module deals with disease identification in plants. This is a hardware to software integrated module wherein an Image capturing device is used to capture an image and send it to the software for analysis which would classify the state of plant as being healthy or infected. The system would also identify the disease. 

2. The second module is an automated plant irrigating system which senses the surrounding and calculates water required by the plant on that specific day uses a Relay to trigger a motor to water only the required amount of water. 

3. The final module consists of an cloud data driven web application which is used for visualization and analysis. Farmer can visualize the watering trends using the data stored on the internet by the triggering of motor. Considering these visualization trends as Logs, he can use them to plan water availability required in future. 

4. Another aspect of the project includes sending SMS to the user in case of any abnormality like over-irrigation or droughts. This would notify the user to take precautionary steps accordingly. 


Research Work: 

Algorithms & Data Analysis: 



Logic and Algorithm to formulate the amount of water required by the crop on a certain day: 

Let’s start with an assumption for the data analysis that the amount of water required for Maize crop depends only on the temperature and humidity. 

Keeping the other parameters constant, we can say that the amount of water required by the crop increases with the increase in temperature. At the same time, the amount of water required decreases with the increase in the humidity. So broadly we can state that water required by the crop is
Directly proportional to temperature
Inversely proportional to humidity

We can closely say that temperature and humidity correspond to transpiration rate in plants. Hence we can say that it is proportional to transpiration rate. 

Let the water required by the crop on a certain day be denoted by w when the transpiration rate is T. Then,

w = k*T

k is the proportionality constant which depends time of crop etc. 

So for a specific day with given temperature or transpiration rate, we can calculate the loss of water in plant due to transpiration and we can hence calculate the amount of water required by the crop. 

The Blaney-Criddle Method can be used to calculate the loss of water for a temperature t using the formula:

T = p(0.46*t + 8)


To obtain the p value, it is essential to know the approximate latitude of the area. For example, the latitude position of Chennai is 13.0827° N. So the corresponding p value for it will be 0.27. Now suppose the temperature on a specific day is 25°C. Then, 
T = 0.27(0.46*25+8) = 5.26. 

This means that loss of water on that particular day in that region will be 5.26 mm/day. 

Now, for the calculation of amount of water required, w = k*T. We have already found T using the Blaney-Criddle Method. k on the other hand depends on the crop properties. We can calculate k using the the average or standard crop conditions of that region. It is well known that amount of water required by Maize crop is 630 mm in the entire growth period of 125 days. So, 

w1+w2+w3+....w125 = k*(T1+T2+T3….T125) 			-1
T1+T2+T3+…..T125 = 0.27(0.46*(t1+t2+t3+...t125)+8)		-2

We know that average temperature for 125 days between the sowing season is 30.5°C in Chennai. 
Tavg = 0.27(0.46*30.5+8) => T = 5.95. For 125 days, Toverall = 5.95*125 = 743.75

Using 1,
630 = k*743.75 => k = 0.84 (for maize crop in Chennai region for entire period of crop)



Actual Calculation: 

According to a report by the ministry of Agriculture and Farmers Welfare in India in 2013, the water level requirements for different crops in their 4 stages were reported. We extracted the data for the winter maize crop which turned out to be the following: 

1. Initial Stage: For 0-20 Days, Water required = 33.4 mm for first 20 days. Thus, Kc1 = 0.4
2. Crop Development Stage: For 20-55 Days, Water required = 113.20 mm for next 35 days. Thus, Kc2 = 0.8
3. Mid-Season Stage: For 55-95 Days, Water required = 209.70 mm for next 40 days. Thus, Kc3 = 1.15
4. Late Season: For 95-125 Days, Water required = 110.25 mm for last 30 days. Thus, Kc4 = 0.7

So finally our calculation split as per the period of the crop as:
1. For initial stage, our formula will be: w = 0.4*0.28(0.46*t+8)
2. For crop development stage, our formula will be: w = 0.8*0.28(0.46*t+8)
3. For mid-season stage our formula will be: w = 1.15*0.28(0.46*t+8)
4. For late season stage, our formula will be: w = 0.7*0.28(0.46*t+8)


Finally, we can say that for a specific day, i.e with given temperature(which can be obtained by temperature sensor) we can determine the water level required by the crop:

w = Kci*0.28(0.46*t+8)

We can trigger our motor on a specific day to maintain w water level on that specific day. Hence the crop would gain water after sensing the environment and will consume only that amount of water which is required by it on that day. 



