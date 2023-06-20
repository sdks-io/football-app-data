
# Playoff Aggregate Score

## Structure

`PlayoffAggregateScore`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `teamAId` | `?int` | Optional | - | getTeamAId(): ?int | setTeamAId(?int teamAId): void |
| `teamAAggregateScore` | `?int` | Optional | - | getTeamAAggregateScore(): ?int | setTeamAAggregateScore(?int teamAAggregateScore): void |
| `teamBId` | `?int` | Optional | - | getTeamBId(): ?int | setTeamBId(?int teamBId): void |
| `teamBAggregateScore` | `?int` | Optional | - | getTeamBAggregateScore(): ?int | setTeamBAggregateScore(?int teamBAggregateScore): void |
| `winningTeamId` | `?int` | Optional | - | getWinningTeamId(): ?int | setWinningTeamId(?int winningTeamId): void |
| `created` | `?string` | Optional | - | getCreated(): ?string | setCreated(?string created): void |
| `updated` | `?string` | Optional | - | getUpdated(): ?string | setUpdated(?string updated): void |

## Example (as JSON)

```json
{
  "TeamA_Id": 122,
  "TeamA_AggregateScore": 38,
  "TeamB_Id": 140,
  "TeamB_AggregateScore": 182,
  "WinningTeamId": 68
}
```

