#!/bin/bash
EC2_INSTANCE_ID=$(curl -s http://169.254.169.254/latest/meta-data/instance-id)
EC2_AZ=$(curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone)
sed -i "s/Delivery/Delivery on $EC2_INSTANCE_ID in $EC2_AZ/g" /var/www/html/public/index.php
chmod 664 /var/www/html/public/index.php