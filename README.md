# [canmaskshurtyou.com](http://canmaskshurtyou.com/)

The source code for [canmaskshurtyou.com](http://canmaskshurtyou.com/)

## About the project

### Why I made it

1. People who think that wearing a mask is unhealthy, or harmful, **are ignorant**.

2. Its funny.

3. I was bored and saw that the domain name was available.

### How the project was made

The project is written in `PHP` (_*shudders*_) and utilizes the [Giphy API](https://developers.giphy.com/).

### How the project works

When a request is sent to [canmaskshurtyou.com](http://canmaskshurtyou.com/) the project will first check locally stored data 
in the form of a JSON file in the `data` folder. 

If no file exists (because no requests have come through yet), or if the file has not been updated that day,
then the application requests 25 gifs from the [Giphy API](https://developers.giphy.com/) and stores them in this file to use for other requests.

Once it has either collected gifs from the [Giphy API](https://developers.giphy.com/), or from the local storage, it selects one at random and displays it to the user.

**"Why did you make this overly complicated, hacked together, non scalable solution?"** 

Well, this bypasses the limit that Giphy places on Beta API Keys (yes I am too lazy to apply for a production key), and this project is all about 
throwing something together to make a ***somewhat*** funny point.
