# Test Plan

**Authors**: Team 1: Daniel Jacobs, Raissa Padua, Dan Huynh, Sumaiya Tabassum, Eli Kleinworm, Romaine Ewan

**Version:** 1
---

### 1.0 Testing Strategy

#### 1.1 Overall strategy

* Our system testing will be performed by generating a list of potential actions that the end-users can partake in, and going through every one of those scenarios one-by-one.

As of now, the testing will be done internally and collectively by our team.

#### 1.2 Test Selection

The *Black-Box* techniques we will be using will be functional. There will also be regression testing performed.

#### 1.3 Adequacy Criterion

The quality of the tests will be determined by several factors:

* How closely we can get the test cases to having a one-to-one relationship to the functional requirements of the software.

* Whether the expected results we generate match the end-user experience within the project specifications and requirements.

* If the test cases effectively cover use cases.

As stated previously, in unit testing we will be more focused on the coding and structural aspects of our product. While in system testing, we will attempt to test according to the functional and non-functional requirements of the client.

#### 1.4 Bug Tracking

We will attempt to keep documentation of all identified bugs. Research into bug tracking software may be done in the future.

---

### 2.0 Test Cases

| **Test Case** | **Purpose**   |**Steps**|**Expected-Result**|**Actual-Result**|**Pass-Fail**|
|:-------------:|:-------------:|:-------:|:-----------------:|:---------------:|-------------|
|Creating a New Account|Making sure users can create their accounts successfully.|Test by entering our desired information to create the account|The user's email should be added to the database where email is ID and returns to login page.|Same|Pass||
|Log in|Making sure the username exists and password enetered is assiociated to the username.|Test by entering a credential that exisits within the database and nonexisiting within the database|Allows user to continue onto their account to GroceryBuddy.|Same|Pass||
|Forget Password|Allows users whom forget password to change their password.|Test by entering an exsisting/nonexisiting username and attempt to change password. |If successful with steps, return to login page.|Same|Pass||
|Item Lookup |Testing wether the item exists within database.|Enter in an grocery item in searchbox to see if it exists.|Shows the name of item on the side.|Same|Pass||

As of now, the implementation procedure of all the software has not been finalized. So attempting to describe the implementation of the black-box that we would run will be premature.

