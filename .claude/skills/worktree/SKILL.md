---
name: worktree
description: "Creates a new Git worktree at ../<project>--<name> on a new branch and bootstraps the Laravel app (composer install, npm install, npm run build)."
disable-model-invocation: true
allowed-tools: Bash
---

Create a new Git worktree named `$ARGUMENTS` by running:

```bash
./bin/worktree $ARGUMENTS
```

Stream the output to the user as it runs. When complete, confirm the worktree path.
