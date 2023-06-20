
# Round

## Structure

`Round`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `roundId` | `?int` | Optional | - | getRoundId(): ?int | setRoundId(?int roundId): void |
| `seasonId` | `?int` | Optional | - | getSeasonId(): ?int | setSeasonId(?int seasonId): void |
| `season` | `?int` | Optional | - | getSeason(): ?int | setSeason(?int season): void |
| `seasonType` | `?int` | Optional | - | getSeasonType(): ?int | setSeasonType(?int seasonType): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `startDate` | `?string` | Optional | - | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | - | getEndDate(): ?string | setEndDate(?string endDate): void |
| `currentWeek` | `?int` | Optional | - | getCurrentWeek(): ?int | setCurrentWeek(?int currentWeek): void |
| `currentRound` | `?bool` | Optional | - | getCurrentRound(): ?bool | setCurrentRound(?bool currentRound): void |
| `games` | [`?(Game[])`](../../doc/models/game.md) | Optional | - | getGames(): ?array | setGames(?array games): void |
| `standings` | [`?(Standing[])`](../../doc/models/standing.md) | Optional | - | getStandings(): ?array | setStandings(?array standings): void |
| `teamSeasons` | [`?(TeamSeason[])`](../../doc/models/team-season.md) | Optional | - | getTeamSeasons(): ?array | setTeamSeasons(?array teamSeasons): void |
| `playerSeasons` | [`?(PlayerSeason[])`](../../doc/models/player-season.md) | Optional | - | getPlayerSeasons(): ?array | setPlayerSeasons(?array playerSeasons): void |

## Example (as JSON)

```json
{
  "RoundId": 2,
  "SeasonId": 246,
  "Season": 216,
  "SeasonType": 4,
  "Name": "Name0"
}
```

