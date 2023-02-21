# Team 21 - Manual E-Commerce Website
Car FrontEnd website using Laravel (A PHP Framework)

## Setup
Once you cloned the repository for the Laravel project, it does not provide all the libraries and dependencies as it involves you preparing your system before making changes to the code.

Please follow the steps before proceeding the actual manipulation to the code:

1. Please make sure that you have downloaded and installed Xampp. Here is the link: https://www.apachefriends.org/download.html
2. Download the LTS version of Node.js and Install Node.js. Here is the link: https://nodejs.org/en/
3. Open Git bash, if you have not installed Git bash then here is the link to download and install git bash: https://gitforwindows.org/
4. Then clone the repository using the git command: `git clone git@github.com:210029073/TresorLDN_E-Commerce-.git`
5. Move the folder that was created by GitHub when cloning repository to the `c:\xampp\htdocs\`. That will be the folder **TresorLDN_E-Commerce-**.
6. If you are using Windows, please set the php directory in xampp from `c:\xampp\php` to the user environment variable.

Select **This PC** and Right click to select **Properties**
![Image](https://user-images.githubusercontent.com/93045145/199501241-b263a45b-3b29-41b0-9343-a00c722372de.png)

Locate the **Advanced System Settings Option**. **Note** My current version of Windows is 11, so it might be different to those using Windows 10. 
![Image](https://user-images.githubusercontent.com/93045145/199502403-9435ab7e-1761-4a43-a697-d8981566101f.png)


Go to Environment Variable
![Image](https://user-images.githubusercontent.com/93045145/199502552-cbe4d8c5-1976-487b-8fab-aef4bdf5d749.png)

_From this step and onwards be careful as you can potentially damage your system. I am not responsible for the cause
of system failures. Please take your risks._

From the **user** environment select **Path** and click the **Edit** button.
![Image](https://user-images.githubusercontent.com/93045145/199503290-dd457ba7-9f0a-4875-8e5f-a275c121d151.png)

Click the **new** button and then type the php directory as follows: `c:\xampp\php`
![Image](https://user-images.githubusercontent.com/93045145/199503715-19eb4b0f-298f-4fd0-93cf-c217aa0b98b0.png)

7. Once you have set the environment variables, Run the command `git checkout develop` in the working directory of **TresorLDN_E-Commerce-**.
8. Then install the dependencies using `php composer.phar install` to install the dependencies.
9. Then you will need to install and compile the Laravel UI on your machine, use the following command `npm install && npm run build`.
10. Once you have built the UI part of the website, then you will need to create the database, to do this follow the instructions.
11. Inside the working directory of **TresorLDN_E-Commerce-** run `php artisan migrate`.
12. Then run `php artisan db:seed --class=ProductsSeeder` to seed the products table. Feel free to add more in **database/seeders/ProductsSeeders.php**, just follow the structure as provided in the file.
13. For accessing the pages via the web browser simply access it via `localhost/TresorLDN_E-Commerce-/public/the_page`. Where the **the_page** is the page you wish to visit.

## FAQs
### *I am having trouble retrieving git repository*
If you get this error message whilst cloning the respository.

![image](https://user-images.githubusercontent.com/93045145/201076089-9e87bcdb-e723-4049-850f-99710c82458c.png)

Then follow the instructions provided by tutorials sheet provided by workshop session, or via the links below:
For generating ssh key:
https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent

For adding ssh key to github repository:
https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account
