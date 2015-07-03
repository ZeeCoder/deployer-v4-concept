goals:
- redefining the tool from being a "deployment" tool, to be a
"remote automatisation" tool instead, like capistrano.
It should be tailored to PHP app deployments, but it should be able to do
anything
- Code over configuration!
- small, well tested modules (Unix philosophy)

    Ex: instead of complicated tasks, they should use services instead

- no globals
- reusable tasks
- code "discoverability"
- server prototypes
- server stages
- server groups
- authentication objects:
    - ssh key,
    - pem key,
    - keyphrase (+interactive)
    - usr/pass login,
    - real agent forwarding
- Familiar, but comprehensive API
- a clear english API
- strategies (rsync, git, ftp, sftp, git-rebase)
- `doctor` command

    This would try to explore what is wrong with the deployment.
    Ex: missing or badly configured access to the git repo on the remote

- `--dry-run`: shows only what deployer would try to do based on the given configuration

issues to solve:
- server name / stage problem

    instead, let's introduce server groups and server stages as different
    things

- default server, default stage, default group on deployment
- server names -> are they really necessary?
    Yes: but it's optional. Only for the reason that tasks may have an easier job of identifying which server they're running on

NOTES

What are tasks?

    Configurable code. Some of them are buit-in.
    Best practice: mostly using services, and keeping them lean.
    They are basically the "controllers" of deployment.

What are recipes?

    Recipes are a description about which tasks should run in what order and
    with what configurations

What are runtime variables?

    These are variables which the tasks can share with others.
    They can be read-only (default) or writable.
    Ex: deploy_path, working_dir etc

| my-app
| -- testing
| ----- current
| ----- releases
| -------- 20140119010101
| ----- shared
| -- production
| ----- current
| ----- releases
| -------- 20140519413121
| ----- shared

Server settings
- name (should be unique, if set)
- deploy_path
- deploy_branch / deploy_tag (git strategy, task configuration?)
- deployment strategy

Runtime variables
- working_path
- stage_path

        the same as the deploy_path if no explicit stage has been set

Stage settings
- kept_releases_num
- current_dir
- release_dir
- shared_dir
