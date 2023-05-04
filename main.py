from flask import Flask
app = Flask(__name__)

@app.route('/')
def web():
    return '''<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            h1{
                text-align: center;
                font-size: 80px;
            }
        </style>
        <title>Hello</title>
    </head>
    <body>
        <div class="content">
            <h1>🥰 Version 02 🥰</h1>
        </div>
    </body>
    </html>
    '''

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
