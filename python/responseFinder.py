from os import read, write
import tweepy
import datetime
import time
import mysql.connector
from tweepy.api import API

#configure interactions with PHP
db = mysql.connector.connect(
    host="162.241.252.116",
    user="pawpathw_admin",
    passwd="Forgotit25!",
    database="pawpathw_lostdogs"
)

mycursor = db.cursor()

#log into twitter for developers
consumer_key ="Q7fXrk4qqz9B3vziyledCVVfg"
consumer_secret = "BuzbKD2SyyXvubkloK1v5hsKwR0x4InDKXIttQ4a7KYN45Cj53"

key = "1446207369772351492-wGXFqMwkgjZbtqNLNSMHfI5Ke6Zduv"
secret = "1V2dYMHtjl81WXBkL2BRox5GfEwiCN4xU736jtsx9Lzqi"

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(key, secret)

api = tweepy.API(auth)

#configure write file
FILE = "/home/maxdotr/zipped/lastresponse.txt"

#store last seen tweet
def read_last_seen(FILE_NAME):
    file_read = open(FILE_NAME, 'r')
    last_seen_id = int(file_read.read().strip())
    file_read.close()
    return str(last_seen_id)

#write last seen tweet
def store_last_seen(FILE_NAME, last_seen_id):
    file_write = open(FILE_NAME, 'w')
    file_write.write(str(last_seen_id))
    file_write.close()
    return


#create parameters for finding tweets
tweetNumber = 10
name = "PawPathway"
def findResponses():
    #parse tweets
    tweetArrayList = []
    tweets = api.search_tweets(q='to:'+name,since_id=read_last_seen(FILE))
    for tweet in reversed(tweets):
        userID = tweet.user.screen_name
        store_last_seen(FILE, tweet.id)
        tweetArray = []
        tweetArray.append(tweet.text)
        tweetArray.append(tweet.user.screen_name)
        tweetArray.append(tweet.id)
        tweetArrayList.append(tweetArray)
        splitTweet = tweet.text.replace("@PawPathway ","").split(",")
        print("LOST DOG! Found in " + splitTweet[0] + "," + splitTweet[1] + ". Breed:" + splitTweet[2] + ". Description:" + splitTweet[3] + ". Turned over to animal control:" + splitTweet[4] + ". Please contact @" + userID + " for more information.")
        api.update_status("LOST DOG! Found in " + splitTweet[0] + "," + splitTweet[1] + ". Breed:" + splitTweet[2] + ". Description:" + splitTweet[3] + ". Turned over to animal control:" + splitTweet[4] + ". Please contact @" + userID + " for more information.")

        #create varaibles to send to mySQL
        cityName = splitTweet[0]
        zipPostal = splitTweet[1]
        breed = splitTweet[2]
        description = splitTweet[3]
        animalControl = splitTweet[4]
        contact = userID
        date = datetime.datetime.now()
        datelocal = date.strftime("%x")

        #send a query to mySQL to add to database
        mycursor.execute(f"INSERT INTO lostdogs(cityName, zipPostal, breed, description, animalControl, contact, date) VALUES ('{cityName}','{zipPostal}','{breed}','{description}','{animalControl}','@{contact}','{datelocal}')")
        db.commit()
        print(tweetArrayList)

#execute
while True:
    findResponses()
    time.sleep(600)
    print("Ran")

