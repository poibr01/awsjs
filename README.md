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

Sure, you can setup an event to automate the stopping of the instance by setting a CPU Avg Utilization 
threshold for a period of time, and you do - but then the user has to contact you again, when (if)
they are wanting to use them again.  Ugh.

In steps AWSome EC2 Jumpstart.  The tool that will enable you end users to:
1) Sign in to a secure website using standard OAuth credentials
2) Get a list of instances assigned to them based on user_tag/value pairs
3) Show the list of instances based on state (Running, or Stopped)
4) Select which instnaces they wish to start, and hit that Start button.

By automating the shutdown of idle instances, and then providing this self-service method for starting 
the same instances, you have effectively save a substantial amount on your EC2 bill.

Install nothing more than launching an AMI with teh web services on it, configuring it, and configuring your
events for auto-shutdown.

User points their mobile device or browser to the website, logs in, and their specific list of instances are
immediately available for management, even though they do not have the AWS Access Key no secret for managing 
the instances that you launched for them.
