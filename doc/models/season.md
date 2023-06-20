
# Season

## Structure

`Season`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `seasonId` | `?int` | Optional | - | getSeasonId(): ?int | setSeasonId(?int seasonId): void |
| `competitionId` | `?int` | Optional | - | getCompetitionId(): ?int | setCompetitionId(?int competitionId): void |
| `season` | `?int` | Optional | - | getSeason(): ?int | setSeason(?int season): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `competitionName` | `?string` | Optional | - | getCompetitionName(): ?string | setCompetitionName(?string competitionName): void |
| `startDate` | `?string` | Optional | - | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | - | getEndDate(): ?string | setEndDate(?string endDate): void |
| `currentSeason` | `?bool` | Optional | - | getCurrentSeason(): ?bool | setCurrentSeason(?bool currentSeason): void |
| `rounds` | [`?(Round[])`](../../doc/models/round.md) | Optional | - | getRounds(): ?array | setRounds(?array rounds): void |

## Example (as JSON)

```json
{
  "SeasonId": 246,
  "CompetitionId": 188,
  "Season": 216,
  "Name": "Name0",
  "CompetitionName": "CompetitionName4"
}
```

