from os import read, write
import tweepy
import time

from tweepy.api import API

#log into twitter for developers
consumer_key ="Q7fXrk4qqz9B3vziyledCVVfg"
consumer_secret = "BuzbKD2SyyXvubkloK1v5hsKwR0x4InDKXIttQ4a7KYN45Cj53"

key = "1446207369772351492-wGXFqMwkgjZbtqNLNSMHfI5Ke6Zduv"
secret = "1V2dYMHtjl81WXBkL2BRox5GfEwiCN4xU736jtsx9Lzqi"

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(key, secret)

api = tweepy.API(auth)

#configure read and write file
FILE = "lastseen.txt"

#read last seen tweet
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

#configure parameters for finding tweets
hashtag = "#lostdog10"
tweetNumber = 10

#make and send tweets to prospective lost dog finders/owners
def makeTweetsArray():
    tweetArrayList = []
    tweets = api.search_tweets(hashtag,since_id=read_last_seen(FILE), count=tweetNumber)
    for tweet in reversed(tweets):
        userID = tweet.user.screen_name
        inResponseTo = tweet.id
        store_last_seen(FILE, tweet.id)
        tweetArray = []
        tweetArray.append(tweet.text)
        tweetArray.append(tweet.user.screen_name)
        tweetArray.append(tweet.id)
        tweetArrayList.append(tweetArray)
        api.update_status("@" + (userID) + " Did you find/lose a dog? Please reply to this tweet in the provided format and we'll repost it on our page and website! Format: city name, zipcode/postal code, breed, description, turned over to animal control?(Y/N). Thanks!", in_reply_to_status_id=inResponseTo)
    print(tweetArrayList)

#execute
while True:
    makeTweetsArray()
    time.sleep(60)

