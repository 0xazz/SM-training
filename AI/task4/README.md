# Creating a map using Turtlebot3 and SLAM on ROS noetic

## Overview

This demo is prepared for the submission of the third AI task in the summer training offered by Smart Methods Co.

It is concerned with creating and saving a map using Turtlebot3 and SLAM approach.

## Steps

Following, are the steps to run the turtlebot3_world simulation and creating a map on ubuntu 20.04 and ROS noetic.

### 1. Assuming turtlebot3 is already working on ROS noetic, choose your preferred version of turtlebot3 which is 'burger' in this case.
	$ export TURTLEBOT3_MODEL=burger

### 2. Run the turtlebot3_world.launch file with gazebo 
	$ roslaunch turtlebot3_gazebo turtlebot3_world.launch
	
### 3. To control the robot with telop, run its node in a new terminal
	$ export TURTLEBOT3_MODEL=burger
	$ roslaunch turtlebot3_teleop turtlebot3_teleop_key.launch

### 4. Now, run the SLAM node in a new terminal
	$ export TURTLEBOT3_MODEL=burger
	$ roslaunch turtlebot3_slam turtlebot3_slam.launch

### 5. Move your robot around using the instructions in the telop terminal until the map is successfully created
	 Control Your TurtleBot3!
 	---------------------------
 	Moving around:
  	      w
  	 a    s    d
  	      x

 	w/x : increase/decrease linear velocity
 	a/d : increase/decrease angular velocity
	space key, s : force stop

 	CTRL-C to quit

### 6. To save the map, make sure map_server is installed properly on your system
	$ rosrun map_server map_saver -f REPLACE_WITH_PREFERRED_LOCATION

### 7. The map is created and saved!

#### check the video on this link
	https://drive.google.com/file/d/1G_kJFDD5Dys1f1_NnaLS3Zzje3INGw4x/view?usp=sharing

![map](map.png)


