# Expert System for Honda CB 150R Diagnosis

This project is a web-based expert system developed to diagnose problems in Honda CB 150R motorcycles using the Depth-First Search (DFS) method. The application is designed to help users identify common faults based on observed symptoms and provide relevant solutions in a structured and logical way.

## Project Description

This system applies the concept of an expert system, where a set of rules and knowledge is used to simulate expert reasoning. Users answer several questions regarding the symptoms they experience, and the application traverses the decision tree using DFS to find the most likely cause of the issue.

The project is built using PHP and Bootstrap and aims to provide an easy-to-use interface for diagnosis, knowledge management, and motorcycle troubleshooting.

## Features

- Motorcycle fault diagnosis for Honda CB 150R
- Rule-based expert system
- Depth-First Search (DFS) decision traversal
- User-friendly web interface
- Symptom-based reasoning
- Terminology dictionary for technical motorcycle terms
- Feedback and suggestion form
- Admin panel for data management

## Technologies Used

- PHP
- MySQL
- HTML
- CSS
- JavaScript
- Bootstrap
- jQuery

## Depth-First Search (DFS) Approach

The system uses DFS to explore possible diagnosis paths based on user-selected symptoms.

The flow is as follows:

1. The user selects or answers symptoms related to the motorcycle condition.
2. The system checks the rules that match those symptoms.
3. It traverses the diagnosis tree using DFS to explore possible causes deeply.
4. When a matching fault is found, the system displays the identified problem and recommended solution.

This algorithm helps the system evaluate cause-and-effect relationships in a logical sequence.

## Project Structure

```text
Sispak_Cb/
├── index.php
├── diagnosis.php
├── about.php
├── kamus_istilah.php
├── form_kritik_saran.php
├── login.php
├── connect.php
├── adminpage.php
├── dashboard.php
├── data_gejala.php
├── data_kerusakan.php
├── data_solusi.php
├── css/
├── js/
├── img/
├── assets/
├── vendor/
├── README.md
├── LICENSE
└── other PHP application files
```

## Installation

### Requirements

Before running this project, ensure that the following are available:

- PHP 7 or newer
- MySQL or MariaDB
- Apache or Nginx web server
- Modern web browser

### Steps

1. Clone the repository:

```bash
git clone https://github.com/Alr3y/Sispak_Cb.git
```

2. Open the project directory:

```bash
cd Sispak_Cb
```

3. Configure the database connection in `connect.php`.

4. Import the required database structure if available in the project environment.

5. Run the application using a local web server:

```bash
php -S localhost:8000
```

6. Open the project in your browser:

```text
http://localhost:8000
```

## Usage

### For End Users

1. Open the homepage.
2. Click the diagnosis menu.
3. Enter a name or identifier.
4. Answer the available symptom questions.
5. The system will analyze the information and display the potential issue and recommended solution.

### For Admin

- Login to the admin page
- Manage symptom data, damage data, and solution data
- Update the rules and diagnosis knowledge base

## Example Diagnosis Flow

```text
Start
  |
  V
User enters symptoms
  |
  V
System checks matching rules
  |
  V
DFS explores diagnosis paths
  |
  V
Possible fault is identified
  |
  V
Recommended solution is displayed
  |
  V
End
```

## Database Concept

The application stores data related to:

- Symptoms
- Damages
- Solutions
- User information
- Admin information

This allows the system to be updated and improved over time without changing the core logic drastically.

## Project Goals

This project was created to support learning and application of:

- Expert systems
- Decision tree reasoning
- Depth-First Search algorithm
- Automotive diagnostic logic
- Web application development with PHP

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.

## Author

- Aldi Renaldi
- GitHub: [Alr3y](https://github.com/Alr3y)

## Contribution

Contributions are welcome. If you want to improve the project, please open an issue or submit a pull request.

---

This project demonstrates a simple expert system for diagnosing Honda CB 150R motorcycle issues using a rule-based approach and the Depth-First Search algorithm.
