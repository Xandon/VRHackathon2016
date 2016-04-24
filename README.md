# VRHackathon2016
The Seattle VR Hackathon was held at the University of Washington.

During the Hackathons Friday night mixer, we formed into a group of three: Ronald Ning, Regina Luo, and myself Xandon Frogget. Ronald wanted to do something with the Amazon Echo hardware. Regina and I wanted to do Data visualization in VR. We tossed around several ideas and decided Alexa would be a great utility to assist while immersed in VR. Unfortunately this meant that the Data visualization would need to wait. The clouds slowly parted and the plan materialized. We would use Alexa as our personal servant while in VR.

After watching the South Park episode where Cartmen is fully submerged in World of Warcraft and relies on his mom to take care of all his personal needs. We come to the conclusion that this is a problem for VR and it needs to be solved.

https://youtu.be/WgvTgV5EoGY

The idea is to allow Cartmen (or anyone in VR) to send communications to the real world without interrupting gameplay.

Saturday morning we met up, and after a primer tutorial by the Amazon team, we decide the echo would work great for voice commands.  By creating a set of “Alexa skills”, we could trigger programmed events to be passed using speech recognition and get programmed interaction with people in the real world. We hoped to be able to send commands via robot telephone messages and/or text messages, to let the outside world know when we were running late or if we needed to pass a bowel movement. The functions called by the “Alexa skills” were handled by Amazons AWS Lambda. Using Lamda we added node.js functions. The functions would make a web services call to twilio when called. Twilio was scripted to make the telephone call or send a text message.


https://developer.amazon.com/

https://console.aws.amazon.com/lambda/

https://www.twilio.com

http://vrhackathon.com/seattle.html
