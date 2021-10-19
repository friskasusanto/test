- clone/download folder project test
- make database
- make .env file, fill the name database with database name before. and "APP_KEY=base64:ZVZBGly0YUhoqC7r6zKm9tf3tFGL+fS/jCHyevfhARw="
- composer install
- php artisan migrate
- php artisan db:seed
- I use my mailtrap account for testing sending email to company while add new employe, need some adjustment in .env file for make it can send for real email/gmail if website will online
(it will be error if you add employe without fill MAIL_MAILER=smtp in .env file. the employe data will still saved, just sending mail to email company not send)
- php artisan serve (for running project in terminal)
- http://localhost:8000/ (in tab window for open project in local website)