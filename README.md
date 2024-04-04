# PHP Server with MongoDB Backend
This is a small project testing PHP Server created with XAMPP and MongoDB as a backend. 
To visually display the data, there is a small frontend table that will use the API from [case-study-frontend](https://github.com/stanvlv/case-study-frontend).

## Installation

1. Clone this repository to your local machine:
git clone https://github.com/stanvlv/case-study-backend.git

2. Move the contents of the repository into a folder called `case-study` in the `htdocs` directory of your XAMPP installation.

3. Install Composer if you haven't already. You can download Composer from [getcomposer.org](https://getcomposer.org/download/).

4. After installing Composer, navigate to the `case-study` folder in your terminal or command prompt.

5. Run the following command to install all dependencies:
composer install


## Database Connection

To connect to the MongoDB database, you'll need to create a `.env` file in the root directory of your project with the following content:
MONGODB_USER=your-cluster-username
MONGODB_PASS=your-cluster-password
MONGODB_DB=your-database-name
MONGODB_COLLECTION=your-collection-name


Replace `your-cluster-username`, `your-cluster-password`, `your-database-name`, and `your-collection-name` with your MongoDB cluster credentials and database details.

## Usage

Once you have installed the dependencies and configured the database connection, you can start the PHP server and access the application in your web browser.


