# Cariuo

This is one of my earliest projects — a simple endless car game where you drive until you crash into another car and lose.
I built it back when I first started learning the MVC architecture using PHP — the first programming language I ever worked with.

## Overview

At the time, I was pretty confused and frustrated, trying to figure out how to become a developer. But despite the mess, this little project (and its messy code!) became a solid foundation for my learning.

The game logic itself was copied from another source (which I unfortunately can’t trace anymore), but the overall structure and MVC architecture were designed and implemented by me — and that part is what really mattered in my learning journey.

## Installation

To run this relic of the web, you'll need a local server that supports PHP and MySQL – something like [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](https://www.wampserver.com/).

1. Clone or download this repo into your local server directory (e.g., `htdocs` for XAMPP):

   ```bash
     git clone https://github.com/mhdned/Cariuo.git
   ```

2. Start Apache and MySQL from your XAMPP/WAMP control panel.

3. Open phpMyAdmin and create a new database named:

   ```
   foxsweeper
   ```

4. Import the SQL file:

   ```
   ./database/mainsweeper.sql
   ```

5. Visit the project in your browser:

   ```
   http://localhost/Cariuo/
   ```

If all goes well, the game should launch and scream "I'm alive!" from the depths of your old-school browser tabs.

## Technologies

<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=php,mysql,html,css,js" />
  </a>
</p>

## Author

Developed by [Mehtiuo](https://github.com/mhdned)
