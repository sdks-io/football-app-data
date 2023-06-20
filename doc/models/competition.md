
# Competition

## Structure

`Competition`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
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
  "CompetitionId": 188,
  "AreaId": 96,
  "AreaName": "AreaName4",
  "Name": "Name0",
  "Gender": "Gender4"
}
```

