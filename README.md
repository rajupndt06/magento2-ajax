# magento2-ajax

How to send data to Controller using 
Ajax and return Result to PHTML in Magento 2.

To understand more about ajax in magento 2 we will do practice.

Lets do this practically, you need to follow step by step

Step 1: Create a new module called Techone_AjaxTutorial
- Create the namespace Techone in the path app\code.
- Create the module name Ajaxtutorial in the path app\code\Techone.
- Create the file named registration.php in the path app\code\Techone\Ajaxtutorial

- Create the file name module.xml in the path app\code\Techone\Ajaxtutorial\etc

End of step #1, I have been completed the step to create new module called Techone_Ajaxtutorial

Step 2: Declare Route
- Route will define name for a module which can use in url to find the url and execute the 

controller action.
- Create the new file named routes.xml in the path app\code\Techone\Ajaxtutorial\etc\frontend
I put the routes.xml file in the folder named frontend, because I want these codes only to apply
on the storefront.

Step 3: Declare Layout
- The Layout is the major path of view layer in Magento 2 module.The layout file is a XML file 
which will define the page structure and will be locate in Techone\Ajaxtutorial\view\frontend
\layout\ folder.
- When rendering page, Magento will check the layout file to find the handle for the page and then 
load Block and Template. We will create a layout handle file for this module.
- Create the new file named ajaxtutorial_index_index.xml, one more ajaxtutorial_result_result.xml 
in the path app\code\Techone\Ajaxtutorial\view\frontend\
I put the layout xml file in the folder named frontend, because I want these codes only to apply
on the storefront.

Layout 1: ajaxtutorial_index_index.xml

Layout 2 : ajaxtutorial_result_result.xml (for getting result)

Step 4 : Declare Template
- In the template file, we can use the html consist for form in which we are passing two number 

using input field with button,also we add jquery ajax below script on click of button we use ajax , 

we also use more template file in which we use variable $block for the block object. 
- Create the new file named calculation.phtml in the path app\code\Techone\Ajaxtutorial\view
\frontend\templates\
- Create one more the new file named result.phtml in the path app\code\Techone\Ajaxtutorial\view
\frontend\templates\

Template 1 : calculation.phtml 

Template 2 : result.phtml 

Step 5 : Declare Controller
- As a class located in module controller folder, controller is responsible for specific URL.
- Create the new file named Index.php in the path app\code\Techone\Ajaxtutorial\Controller\Index
- Create the new file named Index.php in the path app\code\Techone\Ajaxtutorial\Controller\Result

Step 6 : Declare Block
- The Block file contain all the view logic required, it should not contain any kind of html or css. 

Block file are supposed to have all application view logic.
- Create the new file named Index.php in the path app\code\Techone\Ajaxtutorial\Block\Index

Step 4: Test and see the results
Run the command lines following:
- php bin/magento setup:upgrade
- php bin/magento setup:static-content:deploy -f
- php bin/magento cache:flush -done

you tube video link : https://youtu.be/27UGBp5qkZY
