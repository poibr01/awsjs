awsjs
=====

 AWS EC2 Jumpstart App

Lets say you are an AWS Primary Administrator for a large company.
Lets say that AWS has just started taking off within your company.  
You are the goto guy (or gal!) for everything AWS.
The typical scenario is "Dude can I have a bunch of instances like, now, so I can ..."
You say - "Sure what is your cost center, and application?"
You get an appropriate and palatable response and proceed to launch said bunches of instances.
The instances are utilized for 4 hours that day, and then it happenes....
all those Quadruple Xtra Large Instances at $2.04/hr (as of this writing) sit there idle...
..in some cases for days...ultimately costing thousands of dollars a month.

Sure, you can setup an event to automate the stopping of the instance by setting a CPU Avg Utilization threshold for a period of time, and you do - but then the user has to contact you again, when (if)
they are wanting to use them again.  Ugh.

In steps AWSome Jumpstart.  The tool that will enable your IaaS end users to:

1. Sign in to a secure website using standard OAuth credentials
2. Get a list of instances assigned to them based on user_tag/value pairs
3. Show the list of instances based on state (Running, or Stopped)
4. Select which instnaces they wish to start, and hit that Start button.

While providing an ongoing IAM account for the constant conusmer of AWS services is preferable, the user then has the ramp-up time for learning the AWS Console.
By automating the stopping of idle instances (CPU <3%/hr) using Cloud Watch/SQS/SNS (Instrustcions follow if needed), and then providing this self-service method for re-starting the same instances, you have effectively save a substantial amount on your EC2 bill.  For us it was just over %69 cost savings, with minimal impact to the consumers.

Install is as simple as launching the Cloud Formation stack, and answering a few AWS Security questions.

Your users point their mobile device or browser to the website, logs in (based on the type of security you've selected - supports OAuth2, AD, and LDAP), and their specific list of stopped instances are listed, allowing them to start them at the tap of a button.
