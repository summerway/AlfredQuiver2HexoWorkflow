# Overview
**Quiver** notes  => `quiver2hexo` sync => **Hexo** posts => Deploy blog website  
![](http://markdown.zengtuo.net/1552203274.png?imageMogr2/thumbnail/!70p)

## Synchronization
- First sync，migrating **Quiver** notes written by markdown to **Hexo** blog posts.
- Sync there modified notes to **Hexo** blog posts after migration finished.

## Simulation
Start the **Hexo** local server after synchronization finishes, you can view sync effects locally.
![](http://markdown.zengtuo.net/1552199336.png?imageMogr2/thumbnail/!70p)

## Deploy
Deploy website after synchronization finishes.
![](http://markdown.zengtuo.net/1552225752.png?imageMogr2/thumbnail/!70p)

## Rollback
- rollback the last sync operation.
- rollback the last deploy operation.

# Usage
## Download
[Workflow Link](https://raw.githubusercontent.com/summerway/AlfredQuiver2HexoWorkflow/master/quiver2hexo.alfredworkflow);

##  Preparation
`qh server` and `qh deploy` can set hotkey  
![](http://markdown.zengtuo.net/1552224648.png?imageMogr2/thumbnail/!50p)  
- Import the markdown file in `hexo_path/source/_posts` into the Quiver, or make a backup. **The setup script will clear the directory**.
- Add a specific tag to the note to be posted, the default is `relHexo`, which of course don't appear in **Hexo**.
![](http://markdown.zengtuo.net/1552223484.png?imageMogr2/thumbnail/!70p)

## Configuration
First execute sync, an `.env` config file is generated.You can change config manually with it.
![](http://markdown.zengtuo.net/1552197683.png?imageMogr2/thumbnail/!70p)

## Commands
| Command      | Description  |
| :------:  | :-----:  | 
| `qh server` | Start the HEXO local server | 
| `qh deploy` | Deploy after synchronization finishes|
| `qh rollback` | Rollback the last sync operation| - |
| `qh rollback deploy` | Rollback the last deploy operation| - |



