<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class MinimalRepository
{
    public const SCHEMA_JSON = '{"title":"Minimal Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"id":{"type":"integer","examples":[1296269]},"node_id":{"type":"string","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","examples":["Hello-World"]},"full_name":{"type":"string","examples":["octocat\\/Hello-World"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"examples":["This your first repo!"]},"fork":{"type":"boolean"},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"git_url":{"type":"string"},"issue_comment_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"ssh_url":{"type":"string"},"stargazers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"clone_url":{"type":"string"},"mirror_url":{"type":["string","null"]},"hooks_url":{"type":"string","format":"uri","examples":["http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]},"svn_url":{"type":"string"},"homepage":{"type":["string","null"]},"language":{"type":["string","null"]},"forks_count":{"type":"integer"},"stargazers_count":{"type":"integer"},"watchers_count":{"type":"integer"},"size":{"type":"integer","description":"The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0."},"default_branch":{"type":"string"},"open_issues_count":{"type":"integer"},"is_template":{"type":"boolean"},"topics":{"type":"array","items":{"type":"string"}},"has_issues":{"type":"boolean"},"has_projects":{"type":"boolean"},"has_wiki":{"type":"boolean"},"has_pages":{"type":"boolean"},"has_downloads":{"type":"boolean"},"has_discussions":{"type":"boolean"},"archived":{"type":"boolean"},"disabled":{"type":"boolean"},"visibility":{"type":"string"},"pushed_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:06:43Z"]},"created_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2011-01-26T19:14:43Z"]},"permissions":{"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"},"pull":{"type":"boolean"}}},"role_name":{"type":"string","examples":["admin"]},"temp_clone_token":{"type":"string"},"delete_branch_on_merge":{"type":"boolean"},"subscribers_count":{"type":"integer"},"network_count":{"type":"integer"},"code_of_conduct":{"title":"Code Of Conduct","required":["url","html_url","key","name"],"type":"object","properties":{"key":{"type":"string","examples":["contributor_covenant"]},"name":{"type":"string","examples":["Contributor Covenant"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant"]},"body":{"type":"string","examples":["# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant][homepage], version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4][version]\\n\\n[homepage]: http:\\/\\/contributor-covenant.org\\n[version]: http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/\\n"]},"html_url":{"type":["string","null"],"format":"uri"}},"description":"Code Of Conduct"},"license":{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}},"forks":{"type":"integer","examples":[0]},"open_issues":{"type":"integer","examples":[0]},"watchers":{"type":"integer","examples":[0]},"allow_forking":{"type":"boolean"},"web_commit_signoff_required":{"type":"boolean","examples":[false]}},"description":"Minimal Repository"}';
    public const SCHEMA_TITLE = 'Minimal Repository';
    public const SCHEMA_DESCRIPTION = 'Minimal Repository';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1296269,"node_id":"MDEwOlJlcG9zaXRvcnkxMjk2MjY5","name":"Hello-World","full_name":"octocat\\/Hello-World","owner":{"name":"generated_name_null","email":"generated_email_null","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"private":false,"html_url":"https:\\/\\/github.com\\/octocat\\/Hello-World","description":"This your first repo!","fork":false,"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World","archive_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}","assignees_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}","blobs_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}","branches_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}","collaborators_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}","comments_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}","commits_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}","compare_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}","contents_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}","contributors_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors","deployments_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments","downloads_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads","events_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events","forks_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks","git_commits_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}","git_refs_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}","git_tags_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}","git_url":"generated_git_url_null","issue_comment_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}","issue_events_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}","issues_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}","keys_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}","labels_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}","languages_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages","merges_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges","milestones_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}","notifications_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}","pulls_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}","releases_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}","ssh_url":"generated_ssh_url_null","stargazers_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers","statuses_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}","subscribers_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers","subscription_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription","tags_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags","teams_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams","trees_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}","clone_url":"generated_clone_url_null","mirror_url":"generated_mirror_url_null","hooks_url":"http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks","svn_url":"generated_svn_url_null","homepage":"generated_homepage_null","language":"generated_language_null","forks_count":13,"stargazers_count":13,"watchers_count":13,"size":13,"default_branch":"generated_default_branch_null","open_issues_count":13,"is_template":false,"topics":["generated_topics_null"],"has_issues":false,"has_projects":false,"has_wiki":false,"has_pages":false,"has_downloads":false,"has_discussions":false,"archived":false,"disabled":false,"visibility":"generated_visibility_null","pushed_at":"2011-01-26T19:06:43Z","created_at":"2011-01-26T19:01:12Z","updated_at":"2011-01-26T19:14:43Z","permissions":{"admin":false,"maintain":false,"push":false,"triage":false,"pull":false},"role_name":"admin","temp_clone_token":"generated_temp_clone_token_null","delete_branch_on_merge":false,"subscribers_count":13,"network_count":13,"code_of_conduct":{"key":"contributor_covenant","name":"Contributor Covenant","url":"https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant","body":"# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant][homepage], version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4][version]\\n\\n[homepage]: http:\\/\\/contributor-covenant.org\\n[version]: http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/\\n","html_url":"https:\\/\\/example.com\\/"},"license":{"key":"generated_key_null","name":"generated_name_null","spdx_id":"generated_spdx_id_null","url":"generated_url_null","node_id":"generated_node_id_null"},"forks":0,"open_issues":0,"watchers":0,"allow_forking":false,"web_commit_signoff_required":false}';
    /**
     * owner: A GitHub user.
     * size: The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.
     * @param ?array<string> $topics
     * codeOfConduct: Code Of Conduct
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('full_name')] public string $fullName, public Schema\SimpleUser $owner, public bool $private, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public ?string $description, public bool $fork, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('archive_url')] public string $archiveUrl, #[\EventSauce\ObjectHydrator\MapFrom('assignees_url')] public string $assigneesUrl, #[\EventSauce\ObjectHydrator\MapFrom('blobs_url')] public string $blobsUrl, #[\EventSauce\ObjectHydrator\MapFrom('branches_url')] public string $branchesUrl, #[\EventSauce\ObjectHydrator\MapFrom('collaborators_url')] public string $collaboratorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('comments_url')] public string $commentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('commits_url')] public string $commitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('compare_url')] public string $compareUrl, #[\EventSauce\ObjectHydrator\MapFrom('contents_url')] public string $contentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('contributors_url')] public string $contributorsUrl, #[\EventSauce\ObjectHydrator\MapFrom('deployments_url')] public string $deploymentsUrl, #[\EventSauce\ObjectHydrator\MapFrom('downloads_url')] public string $downloadsUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('forks_url')] public string $forksUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_commits_url')] public string $gitCommitsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_refs_url')] public string $gitRefsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_tags_url')] public string $gitTagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('git_url')] public ?string $gitUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_comment_url')] public string $issueCommentUrl, #[\EventSauce\ObjectHydrator\MapFrom('issue_events_url')] public string $issueEventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('keys_url')] public string $keysUrl, #[\EventSauce\ObjectHydrator\MapFrom('labels_url')] public string $labelsUrl, #[\EventSauce\ObjectHydrator\MapFrom('languages_url')] public string $languagesUrl, #[\EventSauce\ObjectHydrator\MapFrom('merges_url')] public string $mergesUrl, #[\EventSauce\ObjectHydrator\MapFrom('milestones_url')] public string $milestonesUrl, #[\EventSauce\ObjectHydrator\MapFrom('notifications_url')] public string $notificationsUrl, #[\EventSauce\ObjectHydrator\MapFrom('pulls_url')] public string $pullsUrl, #[\EventSauce\ObjectHydrator\MapFrom('releases_url')] public string $releasesUrl, #[\EventSauce\ObjectHydrator\MapFrom('ssh_url')] public ?string $sshUrl, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_url')] public string $stargazersUrl, #[\EventSauce\ObjectHydrator\MapFrom('statuses_url')] public string $statusesUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_url')] public string $subscribersUrl, #[\EventSauce\ObjectHydrator\MapFrom('subscription_url')] public string $subscriptionUrl, #[\EventSauce\ObjectHydrator\MapFrom('tags_url')] public string $tagsUrl, #[\EventSauce\ObjectHydrator\MapFrom('teams_url')] public string $teamsUrl, #[\EventSauce\ObjectHydrator\MapFrom('trees_url')] public string $treesUrl, #[\EventSauce\ObjectHydrator\MapFrom('clone_url')] public ?string $cloneUrl, #[\EventSauce\ObjectHydrator\MapFrom('mirror_url')] public ?string $mirrorUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('svn_url')] public ?string $svnUrl, public ?string $homepage, public ?string $language, #[\EventSauce\ObjectHydrator\MapFrom('forks_count')] public ?int $forksCount, #[\EventSauce\ObjectHydrator\MapFrom('stargazers_count')] public ?int $stargazersCount, #[\EventSauce\ObjectHydrator\MapFrom('watchers_count')] public ?int $watchersCount, public ?int $size, #[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public ?string $defaultBranch, #[\EventSauce\ObjectHydrator\MapFrom('open_issues_count')] public ?int $openIssuesCount, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate, public ?array $topics, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public ?bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public ?bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public ?bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('has_pages')] public ?bool $hasPages, #[\EventSauce\ObjectHydrator\MapFrom('has_downloads')] public ?bool $hasDownloads, #[\EventSauce\ObjectHydrator\MapFrom('has_discussions')] public ?bool $hasDiscussions, public ?bool $archived, public ?bool $disabled, public ?string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('pushed_at')] public ?string $pushedAt, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public ?string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt, public ?Schema\MinimalRepository\Permissions $permissions, #[\EventSauce\ObjectHydrator\MapFrom('role_name')] public ?string $roleName, #[\EventSauce\ObjectHydrator\MapFrom('temp_clone_token')] public ?string $tempCloneToken, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('subscribers_count')] public ?int $subscribersCount, #[\EventSauce\ObjectHydrator\MapFrom('network_count')] public ?int $networkCount, #[\EventSauce\ObjectHydrator\MapFrom('code_of_conduct')] public ?Schema\CodeOfConduct $codeOfConduct, public ?Schema\MinimalRepository\License $license, public ?int $forks, #[\EventSauce\ObjectHydrator\MapFrom('open_issues')] public ?int $openIssues, public ?int $watchers, #[\EventSauce\ObjectHydrator\MapFrom('allow_forking')] public ?bool $allowForking, #[\EventSauce\ObjectHydrator\MapFrom('web_commit_signoff_required')] public ?bool $webCommitSignoffRequired)
    {
    }
}
