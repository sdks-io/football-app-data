
# Area

## Structure

`Area`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `areaId` | `?int` | Optional | - | getAreaId(): ?int | setAreaId(?int areaId): void |
| `countryCode` | `?string` | Optional | - | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `competitions` | [`?(Competition[])`](../../doc/models/competition.md) | Optional | - | getCompetitions(): ?array | setCompetitions(?array competitions): void |

## Example (as JSON)

```json
{
  "AreaId": 96,
  "CountryCode": "CountryCode0",
  "Name": "Name0",
  "Competitions": [
    {
      "CompetitionId": 134,
      "AreaId": 214,
      "AreaName": "AreaName8",
      "Name": "Name6",
      "Gender": "Gender8"
    },
    {
      "CompetitionId": 133,
      "AreaId": 215,
      "AreaName": "AreaName7",
      "Name": "Name7",
      "Gender": "Gender7"
    }
  ]
}
```

