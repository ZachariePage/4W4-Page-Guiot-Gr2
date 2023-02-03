# resumer des commande
# creation d'un depot local
- http://localhost/4w4/wp-admin/index.php
- Dans visual code selectionner le dossier open in integrated terminal
- git init
- git status
- git add --all
- git commit -m "message ex : Modification du fichier header"
- git log
- git log --oneline
- git remote add 4w4 https://github.com/ZachariePage/4W4-Page-Guiot-Gr2.git
- git branch -m main  (change la branche master pour main)
- git branch lab1
- git checkout lab1 (pour changer de branche vers lab1)
- git long --oneline (les branches lab1 et main pointe vers le meme commit)
- git checkout main
- git push 4w4 main
- git push 4w4 main (pousse la branche active *main* vers github dans le depot 4w4)
vers la branche main
- git checkout lab1
- git push 4w4 lab1
- git branch lab2
- git checkout lab2
- git push 4w4 lab2
- git push 4w4 lab2 (pousse la branche active lab2 vers 4w4 dans la brance lab2)
- git remote -v (check the alias)