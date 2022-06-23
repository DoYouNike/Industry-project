# *CompareTheHealthcare.com* API

## *CompareTheHealthcare.com*

*CompareTheHealthcare.com* is a website developed by a team of six final-year students at the University of Dundee, specifically for an external client in the United States financial healthcare industry. Its main purpose is to provide price and location comparison for a large range of procedures offered by thousands of hospitals and practices in the US, facilitated by search functionality on the front-end website.

*CompareTheHealthcare.com* can be found [here](https://zeno.computing.dundee.ac.uk/2019-projects/team4/landingpage.php).

The repository for the front-end website can be found [here](https://github.com/JAParsons/CompareTheHealthcare.com).

## Application Program Interface

This repository houses the Application Program Interface for the *CompareTheHealthcare.com* domain. This API is required for interfacing with the database containing the procedure details for front-end users to browse and should be running while the user browses the website.

## Installation

The API requires [Node](https://nodejs.org/en/) for successful runtime. 

From the project root, use Node to install the necessary Node modules.

```node
npm install
```

## Usage

The API must be running from the command line at all times while the user browses the website. From the project root, run:

```node
npm start
```

Feedback on which web routes were accessed, as well as the brief results on the success or failure of database queries, will be displayed here. Always look for a ```Response 200``` Any other HTTP codes indicate query failure.

## Testing

Unit tests can be called by using:

```node
npm test
```

Manual testing of the web routes is best done through [Postman](https://www.getpostman.com/). Test the web routes through your local host using the port specified in *config/server.js*.

## Support

Please contact the project overseer, *TheSSX*, for help resolving any issues experienced.

## Contributing

This project is open to contributions. The two main future goals of this project are permanent hosting of the API on a server and further testing. Development of the API is dependent on front-end website configuration so please contact the project overseer, *TheSSX*, or the front-end overseer, *JAParsons*, before making any contributions.