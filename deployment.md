# Development and Deployment Workflow

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
   4. If virtual machine configuration is required, execute the command `Vagrant ssh`. Upon completion, type `exit` to exit the virtual machine configuration.
   5. To shut down the virtual environment when necessary, run `Vagrant halt`.

- Download the WP Rig theme file
  
  
  
