
# Competition Detail

## Structure

`CompetitionDetail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currentSeason` | [`?Season`](../../doc/models/season.md) | Optional | - | getCurrentSeason(): ?Season | setCurrentSeason(?Season currentSeason): void |
| `teams` | [`?(TeamDetail[])`](../../doc/models/team-detail.md) | Optional | - | getTeams(): ?array | setTeams(?array teams): void |
| `games` | [`?(Game[])`](../../doc/models/game.md) | Optional | - | getGames(): ?array | setGames(?array games): void |
| `competitionId` | `?int` | Optional | - | getCompetitionId(): ?int | setCompetitionId(?int competitionId): void |
| `areaId` | `?int` | Optional | - | getAreaId(): ?int | setAreaId(?int areaId): void |
| `areaName` | `?string` | Optional | - | getAreaName(): ?string | setAreaName(?string areaName): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `gender` | `?string` | Optional | - | getGender(): ?string | setGender(?string gender): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `format` | `?string` | Optional | - | getFormat(): ?string | setFormat(?string format): void |
| `seasons` | [`?(Season[])`](../../doc/models/season.md) | Optional | - | getSeasons(): ?array | setSeasons(?array seasons): void |
| `key` | `?string` | Optional | - | getKey(): ?string | setKey(?string key): void |

## Example (as JSON)

```json
{
  "CurrentSeason": {
    "SeasonId": 4,
    "CompetitionId": 174,
    "Season": 230,
    "Name": "Name2",
    "CompetitionName": "CompetitionName6"
  },
  "Teams": [
    {
      "Players": [
        {
          "PlayerId": 74,
          "FirstName": "FirstName2",
          "LastName": "LastName2",
          "CommonName": "CommonName0",
          "ShortName": "ShortName6"
        },
        {
          "PlayerId": 73,
          "FirstName": "FirstName3",
          "LastName": "LastName3",
          "CommonName": "CommonName9",
          "ShortName": "ShortName5"
        }
      ],
      "TeamId": 127,
      "AreaId": 129,
      "VenueId": 97,
      "Key": "Key9"
    }
  ],
  "Games": [
    {
      "GameId": 233,
      "RoundId": 113,
      "Season": 71,
      "SeasonType": 149,
      "Group": "Group5"
    },
    {
      "GameId": 234,
      "RoundId": 114,
      "Season": 72,
      "SeasonType": 148,
      "Group": "Group4"
    },
    {
      "GameId": 235,
      "RoundId": 115,
      "Season": 73,
      "SeasonType": 147,
      "Group": "Group3"
    }
  ],
  "CompetitionId": 188,
  "AreaId": 96
}
```

