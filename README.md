Here's the `README.md` for your project:

---

# Event Registration 

This is a web-based event management system developed for SRM University-AP. The system allows users to register for various university events through a simple and intuitive interface. It includes a registration form and backend integration for managing event sign-ups and participant data storage.

## Features

- **Event Listings**: The platform displays a list of upcoming events at SRM University-AP, such as *Aloha*, *Paridhan*, *Infinitus*, and *Udgam*.
- **User Registration**: Users can register for events by filling in their personal details, such as name, email, phone number, and the event they wish to participate in.
- **Auto-Generated Registration Number**: The system generates a unique registration number for each participant using JavaScript and `localStorage`. This number is automatically assigned upon successful registration.
- **Backend Integration**: The project uses PHP for handling event registration and saving the participant details to a server-side database.

## Technologies Used

- **HTML/CSS**: For building the frontend pages, styling, and layout.
- **JavaScript**: For auto-generating registration numbers and handling user interactions.
- **PHP**: For backend logic, including handling form submissions and storing participant data.
- **Local Storage**: Used to store and update the registration numbers on the client-side.

## Project Structure

- `index.html`: The landing page that introduces users to the event management system and provides a registration link.
- `events.html`: Displays detailed descriptions of the various events at SRM University-AP, allowing users to explore the events they can register for.
- `register.html`: The registration form where users provide their details and select an event to register for.
- `register.php`: The backend script for handling form submissions and saving data.
- `success.html`: A confirmation page (not uploaded) that confirms successful registration.
  
## How to Use

1. Clone the repository to your local system.
   ```bash
   git clone <https://github.com/sivakalyani121/EventRegistration>
   ```
2. Open `index.html` in a web browser to access the landing page and register for an event.
3. On the registration page, fill in your details and select an event. The system will automatically generate a registration number for each participant using JavaScript.
4. The registration form data is sent to the `register.php` backend for processing and storage.

## Future Enhancements

- **Database Integration**: Replace local storage with a database system to store participant information and manage events more efficiently.
- **Email Notifications**: Automatically send email confirmation to participants upon successful registration.
