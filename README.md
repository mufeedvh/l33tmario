<div align="center">
	<h1>L33T Mario</h1>
	Mario the game but you rescue the princess by hacking.
	<br><br>
</div>

![L33T Mario](https://raw.githubusercontent.com/mufeedvh/l33tmario/master/static/welcome-screen.png)

## What's L33T Mario?

L33T Mario is a web game/application where you as Mario have to rescue the princess just like the classic but you play it by hacking. It's a vulnerable web game where you exploit several vulnerabilites to proceed through levels and eventually rescue the princess, each level getting harder and harder.

It's made for a YouTube video and to help beginners learn **Web Application Security** with a little nostalgia and fun.

## The Code

It's written in one night and I haven't even bothered to document or clean the code, just pushed it to master when it finally worked 😂! I mean you still can understand what's going on but playing the game is the main point.

I will work on cleaning & documenting the code later on when I add more levels/vulnerabilities to the game.

## How To Setup

Currently Linux is the only compatible operating system.

**Apache Setup:**

```bash
    $ cd /var/www/html/
    $ git clone https://github.com/mufeedvh/l33tmario.git
    $ cd l33tmario/
    $ ./setup.sh
```
**Using Docker:**

```bash
    $ git clone https://github.com/mufeedvh/l33tmario.git
    $ cd l33tmario/
    $ docker-compose up -d
    $ curl -I http://127.0.0.1 # to test
```

## Vulnerabilities Covered

- [x] IDOR (Insecure Direct Object Reference)
- [x] XSS (Cross-site Scripting)
- [x] Information Disclosure
- [x] Broken Access Control
- [x] Command Injection
- [x] LFI (Local File Inclusion)
- [ ] SSTI (Server-side Template Injection)
- [ ] SSRF (Server-side Request Forgery)
- [ ] XXE (XML External Entity)
- [ ] Open Redirect
- [ ] SQL Injection
- [ ] DOM Clobbering

**More vulnerabilities and the pending ones will be covered in later levels/versions.**

## Contribution
Ways to contribute
- Suggest a level idea
- Add a new level
- Clean the code
- Report any unintentional vulnerabilities
- Fix something and open a pull request
- Help me document the code
- Spread the word

------------

***Support this project by starring, sharing, and contributing! :heart:***

------------
