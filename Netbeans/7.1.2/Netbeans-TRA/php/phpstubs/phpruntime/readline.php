<?php

// Start of readline v.

/**
 * (PHP 4, PHP 5)<br/>
 * Reads a line
 * @link http://php.net/manual/en/function.readline.php
 * @param string $prompt [optional] <p>
 * You may specify a string with which to prompt the user.
 * </p>
 * @return string a single string from the user. The line returned has the ending
 * newline removed.
 */
function readline ($prompt = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Gets/sets various internal readline variables
 * @link http://php.net/manual/en/function.readline-info.php
 * @param string $varname [optional] <p>
 * A variable name.
 * </p>
 * @param string $newvalue [optional] <p>
 * If provided, this will be the new value of the setting.
 * </p>
 * @return mixed If called with no parameters, this function returns an array of
 * values for all the setting readline uses. The elements will
 * be indexed by the following values: done, end, erase_empty_line,
 * library_version, line_buffer, mark, pending_input, point, prompt,
 * readline_name, and terminal_name.
 * </p>
 * <p>
 * If called with one or two parameters, the old value is returned.
 */
function readline_info ($varname = null, $newvalue = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Adds a line to the history
 * @link http://php.net/manual/en/function.readline-add-history.php
 * @param string $line <p>
 * The line to be added in the history.
 * </p>
 * @return bool true on success or false on failure.
 */
function readline_add_history ($line) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Clears the history
 * @link http://php.net/manual/en/function.readline-clear-history.php
 * @return bool true on success or false on failure.
 */
function readline_clear_history () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Reads the history
 * @link http://php.net/manual/en/function.readline-read-history.php
 * @param string $filename [optional] <p>
 * Path to the filename containing the command history.
 * </p>
 * @return bool true on success or false on failure.
 */
function readline_read_history ($filename = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Writes the history
 * @link http://php.net/manual/en/function.readline-write-history.php
 * @param string $filename [optional] <p>
 * Path to the saved file.
 * </p>
 * @return bool true on success or false on failure.
 */
function readline_write_history ($filename = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Registers a completion function
 * @link http://php.net/manual/en/function.readline-completion-function.php
 * @param callback $function <p>
 * You must supply the name of an existing function which accepts a
 * partial command line and returns an array of possible matches.
 * </p>
 * @return bool true on success or false on failure.
 */
function readline_completion_function ($function) {}

// End of readline v.
?>
