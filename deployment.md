## Summary of Tools Used
- **CMS**: WordPress
- **Documentation and Team Management**: Trello
- **Communication**: Discord
- **Local Environments & IDE**: cognacbox, Visual Studio Code
- **Version Control**: GitHub

## 1.Project management Tool: Trello
Trello is a web-based application that enables users to create boards, lists, and cards, facilitating the organization of tasks and projects in an intuitive and visually appealing manner.Our team utilizes Trello as our primary project management tool. 

#### Steps for Setup

1. **Click the link below to access the website and register with your email**
   [Trello site URL](https://trello.com/)
   
2. **Add team members to the board.**
   - When registering, a pop-up window will appear where you can add members via emails. Alternatively, when you are on the Trello board, locate the "Members" menu on the left side of the dashboard and click on the "+" sign to add team members.
     
3. **Create a new board.**
   - After logging in to the Trello dashboard, click on "Workspaces" at the top-left corner and create your own board.
     
4. **Edit the board.**
   - Once the board is created, proceed to create cards, edit lists, tasks, and perform other necessary operations.
5. **Commence assigned tasks and monitor progress.**
   - Each member can commence their assigned tasks and monitor their progress.


## 2: Communication Tool: Discord

#### Steps for Setup

1. **Visit Discord**: Go to [Discord's website](https://discord.com/) in your web browser.

2. **Sign Up**: Click on "Sign Up" and enter your email, username, and password.

3. **Verify Email**: Check your email for a verification link from Discord and click on it.

4. **Complete Registration**: Once verified, your Discord account is ready to use.

5. **Explore and Join Servers**: Log in to Discord, explore servers, and start communicating with others.


## 3. Optional: Discord and Trello integration

To stay updated on Trello board activities and receive timely reminders, integrate Discord with Trello. Follow this link for instructions: [https://n8n.io/integrations/discord/and/trello/](https://n8n.io/integrations/discord/and/trello/)

## 4. Local Environments & IDE：cognacbox, Visual Studio Code
#### Cognac Box
A super-simple LAMP stack for Vagrant.
A pre-configured Vagrant Box with a full array of features to get you up and running with Vagrant in no time.

#### Steps for Setup

To prepare the local environment, first, you need to install the following software:

- [Vagrant](https://www.vagrantup.com/)
- [VirtualBox](https://www.virtualbox.org/)
- [Git](https://git-scm.com/)

Then, follow these steps:
### Setting up Environment with PowerShell

- **Clone the Cognacbox Repository to your local disk:**
  
   1. Open a terminal tool, such as PowerShell, and execute the command `git clone <Cognacbox repository link> <your folder name to save Cognacbox>`.
      You can use this link: [Cognacbox Repository: https://github.com/reddingwebpro/cognacbox](https://github.com/reddingwebpro/cognacbox)
   2. Navigate to the root folder of Cognacbox that you just created.
   3. Start the virtual machine by executing the command `Vagrant Up`.
   ![image](https://github.com/cp3402-students/project-team5/assets/113411770/86448d04-0c2d-42ed-b9ef-63d9ffc667c6)
   4. If virtual machine configuration is required, execute the command `Vagrant ssh`. Upon completion, type `exit` to exit the virtual machine configuration.
   ![image](https://github.com/cp3402-students/project-team5/assets/113411770/851498b2-8188-41b5-b27f-92826a7fec0c)
   5. To shut down the virtual environment when necessary, run `Vagrant halt`.

- **Download the WP Rig theme file**
  
1. In terminal, under the Cognacbox/public root path execute the command `git clone <WP rig repository link> <your folder name to save WP rig>`.
      You can use this link get WP Rig theme: [https://github.com/wprig/wprig/], So now your WP rig is saved in the public folder.
- **WordPress Installation** 
1. Enter this URL in your browser: 192.168.33.10. If your virtual machine is set up correctly, the Cognac Box dashboard webpage will open.
2. Navigate to 192.168.33.10 and add your WP rig folder name to the URL. For example,
   if your WP rig is in the "WPproject" folder, the URL will be 192.168.33.10/WPproject
   ![image](https://github.com/cp3402-students/project-team5/assets/113411770/02995744-1d45-4ef9-b479-b05e810a3f0b)

3. Click Enter, and the WordPress installation wizard page will appear
![image](https://github.com/cp3402-students/project-team5/assets/113411770/f0b2e445-61dc-4dad-b7ff-d72bd0be71f4)
Configure your WordPress CMS account name, password (this will be used to log in to WordPress, please remember it),site name etc.
4.Click the "Install WordPress" button at the bottom of the page.
5.Once installation is complete, the WordPress login window will pop up.
  Input your account name and password, then click login to start your journey with WordPress.





  
  
  
