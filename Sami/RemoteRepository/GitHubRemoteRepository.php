<?php

/*
 * This file is part of the Sami utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sami\RemoteRepository;

class GitHubRemoteRepository extends AbstractRemoteRepository
{
    public function getFileUrl($projectVersion, $relativePath, $line)
    {
        return sprintf(
            'https://github.com/%s/blob/%s/%s%s',
            $this->name,
            $projectVersion,
            $relativePath,
            $this->getFilePathLineAnchor($line)
        );
    }

    public function getFilePathLineAnchor($line)
    {
        if ($line === null) {
            return '';
        }

        return '#L'.$line;
    }
}
