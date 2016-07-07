# CakePHP Sample for XX

## Step

```bash
# git clone
git clone {this repos}
cd cake

# app configuration
cp config/app.xx.php config/app.php

# composer
composer update

# run
./bin/cake server

# get json
curl http://localhost:8765/dungeons/view/1.json
```

## Result
```json
{
    "dungeon": {
        "id": 1,
        "title": "Ruin of Preface",
        "level": 3,
        "created": "2016-07-06T10:00:00+0900",
        "maps": [
            {
                "id": 1,
                "dungeion_id": 1,
                "coord": 1,
                "created": "2016-07-06T10:00:00+0900"
            },
            {
                "id": 2,
                "dungeion_id": 1,
                "coord": 2,
                "created": "2016-07-06T10:00:00+0900"
            },
            {
                "id": 3,
                "dungeion_id": 1,
                "coord": 4,
                "created": "2016-07-06T10:00:00+0900"
            },
            {
                "id": 4,
                "dungeion_id": 1,
                "coord": 6,
                "created": "2016-07-06T10:00:00+0900"
            },
            {
                "id": 5,
                "dungeion_id": 1,
                "coord": 9,
                "created": "2016-07-06T10:00:00+0900"
            }
        ]
    }
}
```

