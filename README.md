## Home Page -> landingpage.php (localhost/landingpage.php)

Something that is included on a lot of the pages before the home.php page, which serves as the home page for movies after you login is the ZENCHILL image in the upper left corner of the screen. If you click this it will bring you back to the landing page/home.


## Landing Page

From the landing page you are able to create an account which enters your information into the database that is then retrieved later on another pages. If your already a user, you can just click “login!” and it will take you to the login page, alternatively, in the included footer t here is a login link as well.


Also included in the footer is the Terms of Service, which uses an external link and doesn’t display any relating information for the project, a subscriptions page which displays current subscriptions and their benefits and then the Sign In, as mentioned before.


## Signup Page

From the signup page you can enter the information you wish to use as a login, as well as select the subscription tier you wish to be assigned to your account. It does have spots for billing, however, however, the information put there can be literally anything and is retrieved on a different page for you to view.


Also included in the signup, like on many popular streaming service sites, is a redirect under the “CREATE ACCOUNT” button that will redirect you to the login page, if you are already a user. Similarly, once you click “CREATE ACCOUNT” you will be redirected to the login page where you can then login with your brand new account using the information you just entered.


## Login Page

The login page is very simple, it features a centered login box that you can put your email and password you use for your account as well as a Sign In button that checks the database for your information, and if its correct and exists, it signs you in. Otherwise, it will display an error message that the information entered is incorrect. This page also features a slideshow background featuring some shows and movies


Under the Sign In button there are two separate redirects. These are “SIGN UP” and “FORGOT PASSWORD”. The Sign Up redirect will take you back to the signup page that was mentioned earlier whereas the Forgot Password will take you nowhere as I never set that page up.


## Movie Home Page

This page is the home page after you login that features a sidebar that is its own file and is inserted using the include(‘navigation.html’); line. When it comes to included PHP files, the only thing that is in the php section for this page is the part that adds the sidebar navigation, otherwise, everything on this page is preset and doesn’t change.


The navigation from here has a few things, it includes a My Profile button that takes you to your account information, a Search button that takes you to a page to search for every show and movie that’s in the database as well as a button for the home page you are on now, a water later button that doesn’t go anywhere, a Browse TV Shows and Browse Movies button that takes you to a page that only displays Movies and TV Shows and nothing more than those. At the very bottom you have a Logout button that will terminate the current session and take you back to the login page to sign back in to an account.


## Account Page

The account page has its own version of the navigation that just returns you back to the home page above or lets you logout of the account at the bottom. The page itself has three boxes that displays your subscription, payment and account information as well as a Current Deals box that is set in html to say “come back later!”.


The information within each of these boxes, aside from Current Deals retrieves information you entered when you first signed up and displays it PER USER so that you can see your current plan and all information relating to your account. Also featured on this page is the footer.html file that was mentioned previously.


## Search Page

This page allows you to search for both movies and shows by category, which is underneath the search bar OR by searching for words, such as “The” or “Destination”. When you do so, it will search the database for movies and shows that have those words in it and display it, or if you used genre’s as a search method, it will search the genre column for movies with that specific genre.


To display shows on this page when you first click it I do have it set to the Drama category by default (?genre=Drama). Also note that some genres do not have movies in them to display, these include:
> Adventure, Documentary, Musical and Western


## Browse TV Shows & Movies Pages

To make it easier I am going to combine how to use both of these into one section as they are very similar and are basically the same as the Search page description above. The only difference between the Browse TV Shows, Browse Movies and the Search page is that the TV Shows page will ONLY show database entries that have NULL as the duration as series are done in episodes and seasons and NOT a set hour in length like movies.


Similar to that, the Movies section only displays movies by displaying database entries by IS NOT NULL in the php code. This ensures that it displays only movies since all movie entries have an actual duration set to match the length of the actual movie itself.


Both of these pages you can search by category like the Search page by clicking the genre name under the search bar, OR you can search for keywords, such as “Destination” in

movies to display all the Final Destination movies or “The” in shows to display all shows that have the word “The” in the title. Note that the Shows page is set to Drama as default so the page isn’t empty when you go to it and the Movies page is set to Horror so that it also isn’t empty.
