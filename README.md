…or create a new repository on the command line
echo "# opine" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/Gomilestone-Private-Ltd/opine.git


git push -u origin master
…or push an existing repository from the command line
git remote add origin https://github.com/Gomilestone-Private-Ltd/opine.git
git branch -M master
git push -u origin master