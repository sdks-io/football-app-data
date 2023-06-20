
# Season Team

## Structure

`SeasonTeam`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `seasonTeamId` | `?int` | Optional | - | getSeasonTeamId(): ?int | setSeasonTeamId(?int seasonTeamId): void |
| `seasonId` | `?int` | Optional | - | getSeasonId(): ?int | setSeasonId(?int seasonId): void |
| `teamId` | `?int` | Optional | - | getTeamId(): ?int | setTeamId(?int teamId): void |
| `teamName` | `?string` | Optional | - | getTeamName(): ?string | setTeamName(?string teamName): void |
| `active` | `?bool` | Optional | - | getActive(): ?bool | setActive(?bool active): void |
| `gender` | `?string` | Optional | - | getGender(): ?string | setGender(?string gender): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `team` | [`?Team`](../../doc/models/team.md) | Optional | - | getTeam(): ?Team | setTeam(?Team team): void |

## Example (as JSON)

```json
{
  "SeasonTeamId": 124,
  "SeasonId": 246,
  "TeamId": 158,
  "TeamName": "TeamName0",
  "Active": false
}
```

