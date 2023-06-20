# API

```php
$aPIController = $client->getAPIController();
```

## Class Name

`APIController`

## Methods

* [Games by Date](../../doc/controllers/api.md#games-by-date)
* [Areas Countries](../../doc/controllers/api.md#areas-countries)
* [Competitions Leagues](../../doc/controllers/api.md#competitions-leagues)
* [Competition Hierarchy League Hierarchy](../../doc/controllers/api.md#competition-hierarchy-league-hierarchy)
* [Teams](../../doc/controllers/api.md#teams)
* [Venues](../../doc/controllers/api.md#venues)
* [Season Teams](../../doc/controllers/api.md#season-teams)
* [Schedule](../../doc/controllers/api.md#schedule)
* [Players](../../doc/controllers/api.md#players)
* [Player](../../doc/controllers/api.md#player)
* [Players by Team](../../doc/controllers/api.md#players-by-team)
* [Team Season Stats](../../doc/controllers/api.md#team-season-stats)
* [Team Game Stats by Date](../../doc/controllers/api.md#team-game-stats-by-date)
* [Standings](../../doc/controllers/api.md#standings)
* [Competition Fixtures League Details](../../doc/controllers/api.md#competition-fixtures-league-details)
* [Memberships by Team Active](../../doc/controllers/api.md#memberships-by-team-active)
* [Memberships by Team Historical](../../doc/controllers/api.md#memberships-by-team-historical)
* [Memberships Active](../../doc/controllers/api.md#memberships-active)
* [Memberships Historical](../../doc/controllers/api.md#memberships-historical)
* [Upcoming Schedule by Player](../../doc/controllers/api.md#upcoming-schedule-by-player)
* [Memberships Recently Changed](../../doc/controllers/api.md#memberships-recently-changed)
* [Memberships by Competition Active](../../doc/controllers/api.md#memberships-by-competition-active)
* [Memberships by Competition Historical](../../doc/controllers/api.md#memberships-by-competition-historical)
* [Canceled Memberships](../../doc/controllers/api.md#canceled-memberships)


# Games by Date

Games by Date

```php
function gamesByDate(string $format, string $date): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `date` | `string` | Template, Required | The date of the game(s).<br><br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>. |

## Response Type

[`Game[]`](../../doc/models/game.md)

## Example Usage

```php
$format = FormatEnum::XML;

$date = 'date4';

$result = $aPIController->gamesByDate(
    $format,
    $date
);
```


# Areas Countries

Areas (Countries)

```php
function areasCountries(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Area[]`](../../doc/models/area.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->areasCountries($format);
```


# Competitions Leagues

Competitions (Leagues)

```php
function competitionsLeagues(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Competition[]`](../../doc/models/competition.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->competitionsLeagues($format);
```


# Competition Hierarchy League Hierarchy

Competition Hierarchy (League Hierarchy)

```php
function competitionHierarchyLeagueHierarchy(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Area[]`](../../doc/models/area.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->competitionHierarchyLeagueHierarchy($format);
```


# Teams

Teams

```php
function teams(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Team[]`](../../doc/models/team.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->teams($format);
```


# Venues

Venues

```php
function venues(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Venue[]`](../../doc/models/venue.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->venues($format);
```


# Season Teams

Season Teams

```php
function seasonTeams(string $format, string $seasonid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `seasonid` | `string` | Template, Required | Unique FantasyData Season ID. SeasonIDs can be found in the Competition Hierarchy (League Hierarchy).<br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc |

## Response Type

[`SeasonTeam[]`](../../doc/models/season-team.md)

## Example Usage

```php
$format = FormatEnum::XML;

$seasonid = 'seasonid4';

$result = $aPIController->seasonTeams(
    $format,
    $seasonid
);
```


# Schedule

Schedule

```php
function schedule(string $format, string $roundid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `roundid` | `string` | Template, Required | Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy).<br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc |

## Response Type

[`Game[]`](../../doc/models/game.md)

## Example Usage

```php
$format = FormatEnum::XML;

$roundid = 'roundid2';

$result = $aPIController->schedule(
    $format,
    $roundid
);
```


# Players

Players

```php
function players(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Player[]`](../../doc/models/player.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->players($format);
```


# Player

Player

```php
function player(string $format, string $playerid): Player
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `playerid` | `string` | Template, Required | Unique FantasyData Player ID.<br>Example:<code>90026231</code>. |

## Response Type

[`Player`](../../doc/models/player.md)

## Example Usage

```php
$format = FormatEnum::XML;

$playerid = 'playerid4';

$result = $aPIController->player(
    $format,
    $playerid
);
```


# Players by Team

Players by Team

```php
function playersByTeam(string $format, string $teamid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `teamid` | `string` | Template, Required | Unique FantasyData Team ID.<br>Example:<code>516</code>. |

## Response Type

[`Player[]`](../../doc/models/player.md)

## Example Usage

```php
$format = FormatEnum::XML;

$teamid = 'teamid0';

$result = $aPIController->playersByTeam(
    $format,
    $teamid
);
```


# Team Season Stats

Team Season Stats

```php
function teamSeasonStats(string $format, string $roundid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `roundid` | `string` | Template, Required | Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy).<br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc |

## Response Type

[`TeamSeason[]`](../../doc/models/team-season.md)

## Example Usage

```php
$format = FormatEnum::XML;

$roundid = 'roundid2';

$result = $aPIController->teamSeasonStats(
    $format,
    $roundid
);
```


# Team Game Stats by Date

Team Game Stats by Date

```php
function teamGameStatsByDate(string $format, string $date): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `date` | `string` | Template, Required | The date of the game(s).<br><br>Examples: <code>2017-02-27</code>, <code>2017-09-01</code>. |

## Response Type

[`TeamGame[]`](../../doc/models/team-game.md)

## Example Usage

```php
$format = FormatEnum::XML;

$date = 'date4';

$result = $aPIController->teamGameStatsByDate(
    $format,
    $date
);
```


# Standings

Standings

```php
function standings(string $format, string $roundid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `roundid` | `string` | Template, Required | Unique FantasyData Round ID. RoundIDs can be found in the Competition Hierarchy (League Hierarchy).<br>Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc |

## Response Type

[`Standing[]`](../../doc/models/standing.md)

## Example Usage

```php
$format = FormatEnum::XML;

$roundid = 'roundid2';

$result = $aPIController->standings(
    $format,
    $roundid
);
```


# Competition Fixtures League Details

Competition Fixtures (League Details)

```php
function competitionFixturesLeagueDetails(string $format, string $competition): CompetitionDetail
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `competition` | `string` | Template, Required | An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc. |

## Response Type

[`CompetitionDetail`](../../doc/models/competition-detail.md)

## Example Usage

```php
$format = FormatEnum::XML;

$competition = 'competition6';

$result = $aPIController->competitionFixturesLeagueDetails(
    $format,
    $competition
);
```


# Memberships by Team Active

Memberships by Team (Active)

```php
function membershipsByTeamActive(string $format, string $teamid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `teamid` | `string` | Template, Required | Unique FantasyData Team ID.<br>Example:<code>516</code>. |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$teamid = 'teamid0';

$result = $aPIController->membershipsByTeamActive(
    $format,
    $teamid
);
```


# Memberships by Team Historical

Memberships by Team (Historical)

```php
function membershipsByTeamHistorical(string $format, string $teamid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `teamid` | `string` | Template, Required | Unique FantasyData Team ID.<br>Example:<code>516</code>. |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$teamid = 'teamid0';

$result = $aPIController->membershipsByTeamHistorical(
    $format,
    $teamid
);
```


# Memberships Active

Memberships (Active)

```php
function membershipsActive(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->membershipsActive($format);
```


# Memberships Historical

Memberships (Historical)

```php
function membershipsHistorical(string $format): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->membershipsHistorical($format);
```


# Upcoming Schedule by Player

Upcoming Schedule By Player

```php
function upcomingScheduleByPlayer(string $format, string $playerid): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `playerid` | `string` | Template, Required | Unique FantasyData Player ID.<br>Example:<code>90026231</code>. |

## Response Type

[`Game[]`](../../doc/models/game.md)

## Example Usage

```php
$format = FormatEnum::XML;

$playerid = 'playerid4';

$result = $aPIController->upcomingScheduleByPlayer(
    $format,
    $playerid
);
```


# Memberships Recently Changed

Memberships (Recently Changed)

```php
function membershipsRecentlyChanged(string $format, string $days): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `days` | `string` | Template, Required | The number of days since memberships were updated. For example, if you pass <code>3</code>, you'll receive all memberships that have been updated in the past 3 days. Valid entries are: <code>1</code>, <code>2</code> ... <code>30</code> |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$days = 'days0';

$result = $aPIController->membershipsRecentlyChanged(
    $format,
    $days
);
```


# Memberships by Competition Active

Memberships by Competition (Active)

```php
function membershipsByCompetitionActive(string $format, string $competition): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `competition` | `string` | Template, Required | An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc. |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$competition = 'competition6';

$result = $aPIController->membershipsByCompetitionActive(
    $format,
    $competition
);
```


# Memberships by Competition Historical

Memberships by Competition (Historical)

```php
function membershipsByCompetitionHistorical(string $format, string $competition): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |
| `competition` | `string` | Template, Required | An indication of a soccer competition/league. This value can be the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>, <code>1</code>, <code>MLS</code>, <code>8</code>, etc. |

## Response Type

[`Membership[]`](../../doc/models/membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$competition = 'competition6';

$result = $aPIController->membershipsByCompetitionHistorical(
    $format,
    $competition
);
```


# Canceled Memberships

Canceled Memberships

```php
function canceledMemberships(string $format): CanceledMembership
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Template, Required | Desired response format. Valid entries are <code>XML</code> or <code>JSON</code>. |

## Response Type

[`CanceledMembership`](../../doc/models/canceled-membership.md)

## Example Usage

```php
$format = FormatEnum::XML;

$result = $aPIController->canceledMemberships($format);
```

