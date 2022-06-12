const express = require('express');

const app = express();
app.use(express.static("public"));

app.get("/", function (req, res) {
    res.sendFile(__dirname + "/index.html");
});

app.get("/home.html", function (req, res) {
    res.sendFile(__dirname + "/index.html");
});

app.get("/booking.html", function (req, res) {
    res.sendFile(__dirname + "/booking.html");
});

app.get("/read-more-1.html", function (req, res) {
    res.sendFile(__dirname + "/read-more-1.html");
});

app.get("/read-more-3.html", function (req, res) {
    res.sendFile(__dirname + "/read-more-3.html");
});

app.get("/read-more-4.html", function (req, res) {
    res.sendFile(__dirname + "/read-more-4.html");
});

app.get("/about_us.html", function (req, res) {
    res.sendFile(__dirname + "/about_us.html");
});

app.get("/reviews.html", function (req, res) {
    res.sendFile(__dirname + "/reviews.html");
});

app.listen(process.env.PORT || 3000, function () {
    console.log("Server running on port 3000");
});

