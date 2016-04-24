# VRHackathon2016
The Seattle VR Hackathon was held at UW in Seattle, WA

During the chaos of the Friday Night Mixer at the Hackathon, we formed into a group of three,
Ronald Ning, Regina Luo, and myself Xandon Frogget. Ronald really wanted to do do something with the Amazon Echo hardware. We tossed around several ideas and decided Alexa would be a great utility to assist you while in immersion. The Plan would be to use Alexa as our personal servant while in VR.

After watching the Southpark episode where Cartmen is fully submerged in World of Warcraft and relies on his mom take care of all his personal needs. We come to the conclusion that this is a problem for VR and it needs to be solved.

https://youtu.be/WgvTgV5EoGY

The idea is to allow Cartmen or anyone in VR be able to send communications to the real world without interrupting gameplay.

We utilized the echo as a voice tool. Ccreating a set of Alexa skills to allow for voice controlled interaction with people in the real world. We hoped to be able to send commands via robot telephone messages and/or text messages to let the outside world know when we were running late, or if we needed to pass a bowel movement. The functions called by the Alexa skills weere handled by Amazons AWS Lambda. Using Lamda we added the node.js functions. The function would make a web services call to twilio. Twilio was scripted to make a telephone call or send a text message.

https://developer.amazon.com/

https://console.aws.amazon.com/lambda/

https://www.twilio.com

http://vrhackathon.com/seattle.html
