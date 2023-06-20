<?php

declare(strict_types=1);

/*
 * SoccerV3ScoresLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SoccerV3ScoresLib\Controllers;

use Core\Request\Parameters\TemplateParam;
use CoreInterfaces\Core\Request\RequestMethod;
use SoccerV3ScoresLib\Exceptions\ApiException;
use SoccerV3ScoresLib\Models\Area;
use SoccerV3ScoresLib\Models\CanceledMembership;
use SoccerV3ScoresLib\Models\Competition;
use SoccerV3ScoresLib\Models\CompetitionDetail;
use SoccerV3ScoresLib\Models\FormatEnum;
use SoccerV3ScoresLib\Models\Game;
use SoccerV3ScoresLib\Models\Membership;
use SoccerV3ScoresLib\Models\Player;
use SoccerV3ScoresLib\Models\SeasonTeam;
use SoccerV3ScoresLib\Models\Standing;
use SoccerV3ScoresLib\Models\Team;
use SoccerV3ScoresLib\Models\TeamGame;
use SoccerV3ScoresLib\Models\TeamSeason;
use SoccerV3ScoresLib\Models\Venue;

class APIController extends BaseController
{
    /**
     * Games by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2017-02-27</code>,
     *        <code>2017-09-01</code>.
     *
     * @return Game[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function gamesByDate(string $format, string $date): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/GamesByDate/{date}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('date', $date)
            );

        $_resHandler = $this->responseHandler()->type(Game::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Areas (Countries)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Area[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function areasCountries(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Areas')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Area::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Competitions (Leagues)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Competition[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function competitionsLeagues(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Competitions')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Competition::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Competition Hierarchy (League Hierarchy)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Area[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function competitionHierarchyLeagueHierarchy(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/CompetitionHierarchy')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Area::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Teams
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Team[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function teams(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Teams')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Team::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Venues
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Venue[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function venues(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Venues')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Venue::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Season Teams
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $seasonid Unique FantasyData Season ID. SeasonIDs can be found in the
     *        Competition Hierarchy (League Hierarchy).
     *        Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
     *
     * @return SeasonTeam[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function seasonTeams(string $format, string $seasonid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/SeasonTeams/{seasonid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('seasonid', $seasonid)
            );

        $_resHandler = $this->responseHandler()->type(SeasonTeam::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Schedule
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition
     *        Hierarchy (League Hierarchy).
     *        Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
     *
     * @return Game[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function schedule(string $format, string $roundid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Schedule/{roundid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('roundid', $roundid)
            );

        $_resHandler = $this->responseHandler()->type(Game::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Players
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Player[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function players(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Players')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Player::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Player
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID. Example:<code>90026231</code>.
     *
     * @return Player Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function player(string $format, string $playerid): Player
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Player/{playerid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('playerid', $playerid)
            );

        $_resHandler = $this->responseHandler()->type(Player::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Players by Team
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $teamid Unique FantasyData Team ID. Example:<code>516</code>.
     *
     * @return Player[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function playersByTeam(string $format, string $teamid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/PlayersByTeam/{teamid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('teamid', $teamid)
            );

        $_resHandler = $this->responseHandler()->type(Player::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Team Season Stats
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition
     *        Hierarchy (League Hierarchy).
     *        Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
     *
     * @return TeamSeason[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function teamSeasonStats(string $format, string $roundid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/TeamSeasonStats/{roundid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('roundid', $roundid)
            );

        $_resHandler = $this->responseHandler()->type(TeamSeason::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Team Game Stats by Date
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $date The date of the game(s). <br>Examples: <code>2017-02-27</code>,
     *        <code>2017-09-01</code>.
     *
     * @return TeamGame[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function teamGameStatsByDate(string $format, string $date): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/TeamGameStatsByDate/{date}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('date', $date)
            );

        $_resHandler = $this->responseHandler()->type(TeamGame::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Standings
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $roundid Unique FantasyData Round ID. RoundIDs can be found in the Competition
     *        Hierarchy (League Hierarchy).
     *        Examples: <code>1</code>, <code>2</code>, <code>3</code>, etc
     *
     * @return Standing[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function standings(string $format, string $roundid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/Standings/{roundid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('roundid', $roundid)
            );

        $_resHandler = $this->responseHandler()->type(Standing::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Competition Fixtures (League Details)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $competition An indication of a soccer competition/league. This value can be
     *        the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>,
     *        <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     *
     * @return CompetitionDetail Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function competitionFixturesLeagueDetails(string $format, string $competition): CompetitionDetail
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/CompetitionDetails/{competition}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('competition', $competition)
            );

        $_resHandler = $this->responseHandler()->type(CompetitionDetail::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships by Team (Active)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $teamid Unique FantasyData Team ID. Example:<code>516</code>.
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsByTeamActive(string $format, string $teamid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/MembershipsByTeam/{teamid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('teamid', $teamid)
            );

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships by Team (Historical)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $teamid Unique FantasyData Team ID. Example:<code>516</code>.
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsByTeamHistorical(string $format, string $teamid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/HistoricalMembershipsByTeam/{teamid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('teamid', $teamid)
            );

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships (Active)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsActive(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/ActiveMemberships')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships (Historical)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsHistorical(string $format): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/HistoricalMemberships')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Upcoming Schedule By Player
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $playerid Unique FantasyData Player ID. Example:<code>90026231</code>.
     *
     * @return Game[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function upcomingScheduleByPlayer(string $format, string $playerid): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/UpcomingScheduleByPlayer/{playerid}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('playerid', $playerid)
            );

        $_resHandler = $this->responseHandler()->type(Game::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships (Recently Changed)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $days The number of days since memberships were updated. For example, if you
     *        pass <code>3</code>, you'll receive all memberships that have been updated in the
     *        past 3 days. Valid entries are: <code>1</code>, <code>2</code> ... <code>30</code>
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsRecentlyChanged(string $format, string $days): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/RecentlyChangedMemberships/{days}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('days', $days)
            );

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships by Competition (Active)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $competition An indication of a soccer competition/league. This value can be
     *        the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>,
     *        <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsByCompetitionActive(string $format, string $competition): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/{format}/MembershipsByCompetition/{competition}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('competition', $competition)
            );

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Memberships by Competition (Historical)
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     * @param string $competition An indication of a soccer competition/league. This value can be
     *        the CompetitionId or the Competition Key. Possible values include: <code>EPL</code>,
     *        <code>1</code>, <code>MLS</code>, <code>8</code>, etc.
     *
     * @return Membership[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function membershipsByCompetitionHistorical(string $format, string $competition): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/{format}/HistoricalMembershipsByCompetition/{competition}'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']),
                TemplateParam::init('competition', $competition)
            );

        $_resHandler = $this->responseHandler()->type(Membership::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Canceled Memberships
     *
     * @param string $format Desired response format. Valid entries are <code>XML</code> or
     *        <code>JSON</code>.
     *
     * @return CanceledMembership Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function canceledMemberships(string $format): CanceledMembership
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/{format}/CanceledMemberships')
            ->auth('global')
            ->parameters(TemplateParam::init('format', $format)->serializeBy([FormatEnum::class, 'checkValue']));

        $_resHandler = $this->responseHandler()->type(CanceledMembership::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
