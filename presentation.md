## Project Setup:

- **Backend Environment**: Utilized XAMPP with Vanilla PHP and MongoDB for server creation.
- **Frontend Framework**: Implemented a small Vue.js application with a single component for displaying data.

## Backend Development Approach:

- **Use of Functions Over OOP**: Opted for a functional programming approach in PHP instead of Object-Oriented Programming.
- **Architecture**: Followed a basic MVC (Model-View-Controller) concept, where controllers handle requests and interact with models for CRUD operations.

## MongoDB Integration:

- **Schemaless Data Structure**: Currently, there's no strict schema enforced in MongoDB, allowing flexibility in data storage.
- **Data Validation**: Implemented basic data validation within models to ensure essential fields are present before insertion.
  - Example: Checking for required fields like rank, hospitalName, country, city, and website.

## Security Considerations:

- **Input Sanitization**: Although MongoDB offers inherent protection against SQL injections, implemented additional checks for input data to enhance security.
- **Preventing Vulnerabilities**: Future enhancements could include comprehensive error checking and query validation for each parameter before database operations.

## Advantages of MongoDB:

- **Horizontal Scalability**: MongoDB's document-oriented structure allows for easy scaling horizontally, enabling efficient handling of growing datasets.
- **Performance Benefits**: By not adhering to traditional table structures, MongoDB offers faster data retrieval and storage operations, contributing to better application performance.

## Future Enhancements:

- **Pagination Implementation**: As the database grows, introducing pagination will optimize data retrieval by fetching a specific number of records at a time, improving efficiency and user experience.
